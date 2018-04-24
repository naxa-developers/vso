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




      if($this->input->post('category')== '0'){

        $fiter_param=array(

          'incident_time >=' => $this->input->post('from_date'),
          'incident_time <=' => $this->input->post('to_date'),

        );
        $filter=$this->Report_model->filter_data($fiter_param);
      //  var_dump($filter);

      }else{

        $fiter_param=array(
          'incident_type =' => $this->input->post('category'),
          'incident_time >=' => $this->input->post('from_date'),
          'incident_time <=' => $this->input->post('to_date'),

        );
        $filter=$this->Report_model->filter_data($fiter_param);
      //  var_dump($filter);


      }



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
