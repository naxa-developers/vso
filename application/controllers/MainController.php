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
  $this->load->view('header');
  $this->load->view('contact');
  $this->load->view('footer');

}


public function map_page(){


  $this->load->view('header');
  $this->load->view('mapt');
  $this->load->view('footer');


}
public function publication(){

$this->load->model('Publication_model');
  $this->body['data']=$this->Publication_model->get_all_data();

  $this->load->view('header');
  $this->load->view('publication',$this->body);
  $this->load->view('footer');
}

  public function post_data()

  {

    $tbl='crops_2015';

    $get=$this->Main_model->get_post($tbl);
    var_dump($get);


  }

  public function default_page()
  {

    // echo $this->db->query("SELECT VERSION()")->row('version');

    //echo base_url();
    $tbl='categories_tbl';
   $this->body['hazard_data']=$this->Main_model->get_cat_hazard($tbl);
    $this->body['exposure_data']=$this->Main_model->get_cat_exposure($tbl);
   $this->body['baseline_data']=$this->Main_model->get_cat_baseline($tbl);


   $this->body['background_img']=$this->Main_model->get_bck_img();
   $this->body['emerg_contact']=$this->Upload_model->get_emergency_con();

    $this->load->view('header');
    $this->load->view('main',$this->body);
    $this->load->view('footer');



  }


public function log(){

$this->load->view('admin/login-page');

}

//about
  public function about_page(){



     $this->body['proj_data']=$this->Main_model->get_proj_data();
     $this->body['disaster']=$this->Main_model->get_about_where(1);
     $this->body['risk']=$this->Main_model->get_about_where(2);
     $this->body['utility']=$this->Main_model->get_about_where(3);
     $this->body['house']=$this->Main_model->get_about_where(4);
     $this->body['query']=$this->Main_model->get_about_where(5);

    $this->load->view('header');
    $this->load->view('about',$this->body);
    $this->load->view('footer');



  }

  //datasets view page

  public function dataset_page(){

    $this->body['data']=$this->Main_model->get_category();
   //var_dump($this->body['data']);
    $this->load->view('header');
    $this->load->view('datasets',$this->body);
    $this->load->view('footer');


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

    $this->load->view('header');
    $this->load->view('inventory');
    $this->load->view('footer');


  }



}
