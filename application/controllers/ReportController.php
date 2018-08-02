<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ReportController extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    $this->load->helper('url');
    $this->load->model('Report_model');
    $this->load->model('Dash_model');

  }

  public function report_page(){

    //filter  startColorstr
    if(isset($_POST['submit'])){


      //var_dump($_POST);
      $this->input->post('from_date');
      $this->input->post('to_date');
      $this->input->post('category');

      $sql="select * FROM report_tbl WHERE ";
      unset($_POST['submit']);
      foreach($_POST as $key => $value ){

        //echo $value;
        //echo $key;
        if($_POST[$key]!='0'){
          //echo $key;
          if($key == "from_date" && $_POST['from_date'] != ""){
            $sql.="incident_time >= '".$value."' AND ";
          }
          elseif($key == "to_date" && $_POST['to_date'] != ""){
            $sql.="incident_time <= '".$value."' AND ";
          }
          elseif($key != "from_date" && $key != "to_date"){
            $sql.=$key."='".$value."' AND ";
          }

        }

      }

      //echo $sql;
      $query=substr($sql, 0, strlen($sql)-4);
      //echo $query;
      $queryy=$this->db->query($query);
      $filter= $queryy->result_array();
      //var_dump($filter);
      // foreach($filter as $f){
      //
      // echo $f['name'];
      //
      // }

      // if($this->input->post('category')== '0'){
      //
      //   $fiter_param=array(
      //
      //     'incident_time >=' => $this->input->post('from_date'),
      //     'incident_time <=' => $this->input->post('to_date'),
      //
      //   );
      //   $filter=$this->Report_model->filter_data($fiter_param);
      // //  var_dump($filter);
      //
      // }else{
      //
      //   $fiter_param=array(
      //     'incident_type =' => $this->input->post('category'),
      //     'incident_time >=' => $this->input->post('from_date'),
      //     'incident_time <=' => $this->input->post('to_date'),
      //
      //   );
      //   $filter=$this->Report_model->filter_data($fiter_param);
      //var_dump($filter);
      //
      //
      // }



      if($filter==NULL){
        $filter=$this->Report_model->get_report_data();
        $this->body['report_data']=$filter;
        $this->session->set_flashdata('msg','No Matching data as filter applied');
      }else{

        $this->body['report_data']=$filter;
      }
      foreach($filter as $data){

        $features_report[]= array(
          "type" =>"Feature",
          "properties"=>$data,
          "geometry"=>array(

            'type'=>'Point',
            'coordinates'=>array(
              $data['longitude'],
              $data['latitude'],
              1.0
            ),
          ),
        );


      }

      $map_report= array(
        'type' => 'FeatureCollection',
        'features' => $features_report,
      );

      $this->body['report_map_layer']= json_encode($map_report, JSON_NUMERIC_CHECK);

      //var_dump($this->body['report_map_layer']);

         $this->data['site_info']=$this->Report_model->site_setting();


      $this->load->view('header',$this->data);
      $this->load->view('report_page',$this->body);
      $this->load->view('footer',$this->data);











    }else{


      $all_report_data=$this->Report_model->get_report_data();
      $this->body['report_data']=$all_report_data;

      foreach($all_report_data as $data){

        $features_report[]= array(
          "type" =>"Feature",
          "properties"=>$data,
          "geometry"=>array(

            'type'=>'Point',
            'coordinates'=>array(
              $data['longitude'],
              $data['latitude'],
              1.0
            ),
          ),
        );


      }

      $map_report= array(
        'type' => 'FeatureCollection',
        'features' => $features_report,
      );

      $this->body['report_map_layer']= json_encode($map_report, JSON_NUMERIC_CHECK);

      //views add
      $count=$this->Report_model->get_count_views('reports');

      $add_count=$count['views_count']+1;

      $data=array(
      'views_count'=>$add_count,

      );


    $this->Report_model->update_views($count['id'],$data);

    //views add end

      //var_dump($this->body['report_map_layer']);
      $this->data['site_info']=$this->Report_model->site_setting();
      $this->body['map_set']=$this->Report_model->site_setting();

    

      $this->load->view('header',$this->data);
      $this->load->view('report_page',$this->body);
      $this->load->view('footer',$this->data);

    }
  }


  public function report_table()
  {
    $this->data['site_info']=$this->Report_model->site_setting();
    $this->load->view('header',$this->data);
    $this->load->view('map_reports_table',$this->data);
    $this->load->view('footer',$this->data);
  }



  public function report_insert_api(){

    $data_array=json_decode($_POST['data'],TRUE);
    $insert=$this->Report_model->insert($data_array);

    if ($insert=="") {




    }else{

      $file_name = $_FILES['photo']['name'];

      $ext = pathinfo($file_name, PATHINFO_EXTENSION);

      $img_upload=$this->Report_model->do_upload($file_name,$insert);


      if ($img_upload == 1) {

        $image_path=base_url() . 'uploads/report/'.$insert.'.'.$ext ;

        $data=array(

          'photo'=>$image_path,
          'photo_thumb'=>base_url() . 'uploads/report/'.$insert.'_thumb'.$ext

        );

        $config['image_library'] = 'gd2';
        $config['source_image'] = './uploads/report/'.$insert.$ext;
        $config['new_image'] = './uploads/report/'.$insert.$ext;
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width']         = 800;
       $config['height']       = 800;

        $this->load->library('image_lib', $config);
        $this->image_lib->initialize($config);


          $this->image_lib->resize();
          //var_dump($this->image_lib->resize());
          //var_dump($this->image_lib->display_errors());
        //  exit();
          if(!$this->image_lib->resize())
 {
     echo $this->image_lib->display_errors();
 }

        $this->Report_model->update_img_path($insert,$data);
        $response['status']=200;
        $response['data']='Reported';
        echo json_encode($response);

      }else {

        $code= strip_tags($img_upload['error']);
        $response['status']=201;
        $response['data']=$code;
        echo json_encode($response);

      }







    }


  }

  public function search(){

    $id=$this->input->get('data');
    $search=$this->Report_model->search($id);



    $features= array(
      "type" =>"Feature",
      "properties"=>$search,
      "geometry"=>array(

        'type'=>'Point',
        'coordinates'=>array(
          $search['longitude'],
          $search['latitude'],
          1.0
        ),
      ),

    );

    $single_report= array(
      'type' => 'FeatureCollection',
      'features' => $features,
    );

    echo  json_encode($single_report,JSON_NUMERIC_CHECK);


  }



  //admin panel parent start

  public function report_manage()
  {


    if(isset($_POST['submit'])){

      var_dump($_POST);
      $id=$this->input->post('id');
      if($this->input->post('status')=='completed'){

      $data=$this->Report_model->get_data($id);
      $this->load->model('Newsletter');
      $mail_subject='Report';
      $m='Report submitted by '.$data["name"].' about '.$data["incident_type"].' From Ward '.$data["ward"].' has been Completed. Complaint was as:<br> '.$data["message"].'<br> Plese follow link to view all report <br>'.base_url().'report_page';
      $this->Newsletter->send_mail($m,$mail_subject);

      }
      $status=array(
        'status'=>$this->input->post('status'),
      );
      $this->Report_model->update_img_path($id,$status);
      $this->session->set_flashdata('msg', 'Satus successfully Changed');
      redirect('report_manage');

    }else{

      $this->body['data']=$this->Report_model->get_report_data();

      //var_dump($this->body['data']);

      $this->load->view('admin/header');
      $this->load->view('admin/report_tbl',$this->body);
      $this->load->view('admin/footer');

    }

    // code...
  }

  public function delete_data(){

    $id=$this->input->get('id');
    $tbl_name='report_tbl';

    $this->Dash_model->delete_data($id,$tbl_name);



    $this->session->set_flashdata('msg','Id number '.$id.' row data was deleted successfully');
    redirect('report_manage');


  }


  //end

  public function map_reports_table(){

    $this->data['site_info']=$this->Report_model->site_setting();
    $this->body['data']=$this->Report_model->get_map_reports_table();

    $this->load->view('header',$this->data);
    $this->load->view('map_reports_table',$this->body);
    $this->load->view('footer',$this->data);
  }

  public function map_reports(){

     $this->data['site_info']=$this->Report_model->site_setting();

    $this->body['data']=$this->Report_model->get_report_data();
    $this->load->view('header',$this->data);
    $this->load->view('map_reports',$this->body);
    $this->load->view('footer',$this->data);
  }




}
