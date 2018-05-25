<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ReportController extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    $this->load->helper('url');
    $this->load->model('Report_model');

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
      // //  var_dump($filter);
      //
      //
      // }


   //var_dump($filter);

      $this->body['report_data']=$filter;

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

      $this->load->view('header');
      $this->load->view('report_page',$this->body);
      $this->load->view('footer');











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

    //var_dump($this->body['report_map_layer']);

    $this->load->view('header');
    $this->load->view('report_page',$this->body);
    $this->load->view('footer');

}
  }


 public function report_table()
{
  $this->load->view('header');
  $this->load->view('map_reports_table');
  $this->load->view('footer');
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

    'photo'=>$image_path

  );

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


}
