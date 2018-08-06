<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MainController extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    $this->load->helper('url');
    $this->load->model('Main_model');
    $this->load->model('Upload_model');


  }




  public function contact(){

    $this->body['health']=$this->Main_model->get_contact('health','emergency_contact');
    $this->body['responders']=$this->Main_model->get_contact('responders','emergency_contact');
    $this->body['security']=$this->Main_model->get_contact('security','emergency_contact');
    $this->body['ngo']=$this->Main_model->get_contact('ngo','emergency_contact');
    $this->body['ddr']=$this->Main_model->get_contact('ddr','emergency_personnel');
    $this->body['personnel']=$this->Main_model->get_contact('personnel','emergency_personnel');
    $this->body['members']=$this->Main_model->get_contact('members','emergency_personnel');
    //language
    if($this->session->userdata('Language')==NULL){

      $this->session->set_userdata('Language','nep');
    }

    $lang=$this->session->get_userdata('Language');


    if($lang['Language']=='en'){

      $this->body['site_info']=$this->Main_model->site_setting_en();

    }else{

     $this->body['site_info']=$this->Main_model->site_setting_nep();


    }

    //language

    $this->load->view('header',$this->body);
    //$this->load->view('contact',$this->body);
    $this->load->view('contact_static',$this->body);
    $this->load->view('footer',$this->body);

  }


  public function map_page(){


    $this->load->view('header');
    $this->load->view('mapt');
    $this->load->view('footer');


  }
  public function publication(){

    $this->load->model('Publication_model');
    $this->body['data']=$this->Publication_model->get_all_data();

    //language
    if($this->session->userdata('Language')==NULL){

      $this->session->set_userdata('Language','nep');
    }

    $lang=$this->session->get_userdata('Language');


    if($lang['Language']=='en'){

      $this->body['site_info']=$this->Main_model->site_setting_en();

    }else{

     $this->body['site_info']=$this->Main_model->site_setting_nep();


    }

    //language
    $this->load->view('header',$this->body);
    $this->load->view('publication',$this->body);
    $this->load->view('footer',$this->body);
  }



  public function default_page()
  {

    $this->load->model('Report_model');
    // echo $this->db->query("SELECT VERSION()")->row('version');

    //echo base_url();
    $tbl='categories_tbl';
    $this->body['hazard_data']=$this->Main_model->get_cat_hazard($tbl);
    $this->body['exposure_data']=$this->Main_model->get_cat_exposure($tbl);
    $this->body['baseline_data']=$this->Main_model->get_cat_baseline($tbl);
    $this->body['feature']=$this->Main_model->get_feature();


    //views add
    $count=$this->Report_model->get_count_views('home');

    $add_count=$count['views_count']+1;

    $data=array(
      'views_count'=>$add_count,

    );


    $this->Report_model->update_views($count['id'],$data);

    //views add end


    //language
    if($this->session->userdata('Language')==NULL){

      $this->session->set_userdata('Language','nep');
    }

    $lang=$this->session->get_userdata('Language');


    if($lang['Language']=='en'){

      $this->body['site_info']=$this->Main_model->site_setting_en();

    }else{

     $this->body['site_info']=$this->Main_model->site_setting_nep();


    }

    //language


    //$this->body['emerg_contact']=$this->Upload_model->get_emergency_con();

    $this->load->view('header',$this->body);
    $this->load->view('main',$this->body);
    $this->load->view('footer',$this->body);



  }


  public function log(){

    $this->load->view('admin/login-page');

  }

  //about
  public function about_page(){

    $this->load->model('Report_model');

    $this->body['proj_data']=$this->Main_model->get_proj_data();
    $this->body['disaster']=$this->Main_model->get_about_where(1);
    $this->body['risk']=$this->Main_model->get_about_where(2);
    $this->body['utility']=$this->Main_model->get_about_where(3);
    $this->body['house']=$this->Main_model->get_about_where(4);
    $this->body['query']=$this->Main_model->get_about_where(5);

    //views add
    $count=$this->Report_model->get_count_views('about');

    $add_count=$count['views_count']+1;

    $data=array(
      'views_count'=>$add_count,

    );


    $this->Report_model->update_views($count['id'],$data);
    //language
    if($this->session->userdata('Language')==NULL){

      $this->session->set_userdata('Language','nep');
    }

    $lang=$this->session->get_userdata('Language');


    if($lang['Language']=='en'){

      $this->body['site_info']=$this->Main_model->site_setting_en();

    }else{

     $this->body['site_info']=$this->Main_model->site_setting_nep();


    }

    //language
    //views add end

    $this->load->view('header',$this->body);
    $this->load->view('about',$this->body);
    $this->load->view('footer',$this->body);



  }

  //datasets view page

  public function dataset_page(){

    if(isset($_POST['submit_search'])){

      $this->body['checked_data']=array();
      $this->body['search']=$this->input->post('search');
      $this->body['data']=$this->Main_model->get_category();
      $this->body['data_panel']=$this->Main_model->get_category();

    }else{

      $this->body['search']="";
      $this->body['checked_data']=array();
      $this->body['data']=$this->Main_model->get_category();
      $this->body['data_panel']=$this->Main_model->get_category();

    }
    if(isset($_POST['submit'])){

    unset($_POST['submit']);
    //var_dump($_POST);

     if($_POST == NULL){
         $this->body['checked_data']=array();
         $this->body['data']=$this->Main_model->get_category();
     }else{
        $checked_dataset=$_POST['dataset'];
        $this->body['data']=$this->Main_model->get_checked_dataset($checked_dataset);
        $this->body['checked_data']=$checked_dataset;

     }





      $this->body['data_panel']=$this->Main_model->get_category();
      //var_dump($get_checked);

    }
    //var_dump($this->body['data']);
    //language
    if($this->session->userdata('Language')==NULL){

      $this->session->set_userdata('Language','nep');
    }

    $lang=$this->session->get_userdata('Language');


    if($lang['Language']=='en'){

      $this->body['site_info']=$this->Main_model->site_setting_en();

    }else{

     $this->body['site_info']=$this->Main_model->site_setting_nep();


    }

    //language

    $this->load->view('header', $this->body);
    $this->load->view('datasets',$this->body);
    $this->load->view('footer', $this->body);


  }



  public function get_map(){

    $tbl='survey';

    $get=$this->Main_model->get($tbl);

    foreach ($get as $value){

      $features[] = array(
        'type' => 'Feature',
        'properties' => array(
          'id'=>$value['id'],
          'name_of_surveyor'=>$value['name_of_surveyor'],
          'name_of_district'=>$value['name_of_district'],
          'name_of_municipality'=>$value['name_of_municipality'],
          'ward_no'=>$value['ward_no'],
          'address'=>$value['address'],
        ),
        'geometry' => array(
          'type' => 'Point',
          'coordinates' => array(
            $value['longitude'],
            $value['latitude'],
            1.0
          ),
        ),
      );

    }

    $new_data = array(
      'type' => 'FeatureCollection',
      'features' => $features,
    );

    $this->body['geo']= json_encode($new_data, JSON_NUMERIC_CHECK);
    $this->load->view('map',$this->body);



  }

  public function inventory(){
    //language
    if($this->session->userdata('Language')==NULL){

      $this->session->set_userdata('Language','nep');
    }

    $lang=$this->session->get_userdata('Language');


    if($lang['Language']=='en'){

      $this->body['site_info']=$this->Main_model->site_setting_en();

    }else{

     $this->body['site_info']=$this->Main_model->site_setting_nep();


    }

    //language
    $this->load->view('header', $this->body);
    $this->load->view('inventory');
    $this->load->view('footer', $this->body);


  }

  public function get_csv_emergency(){

    $this->load->dbutil();

    $this->load->helper('file');
    $this->load->helper('download');

    array_map('unlink', glob("uploads/emergency_personnel/file/*.csv"));


    $type=$this->input->get('type');
    $namee=$this->input->get('name');
    $tbl=$this->input->get('tbl');





    //echo 'asdasd';


    $report=$this->Main_model->get_contact_csv($type,$tbl);











    /*  pass it to db utility function  */
    $new_report = $this->dbutil->csv_from_result($report);
    //var_dump(mb_convert_encoding($new_report, 'UTF-8', 'auto'));
  //  exit();
    $name = $namee.'.csv';
    /*  Now use it to write file. write_file helper function will do it */
    file_put_contents('uploads/emergency_personnel/file/'.$name,$new_report);

    $data=file_get_contents('uploads/emergency_personnel/file/'.$name);
    force_download($name,$data);

    // $path='uploads/csv/'.$name;
    // echo $path;
    // unlink($path);
  }



}
