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


  var_dump($_POST);
$this->input->post('from_date');
$this->input->post('to_date');
$this->input->post('category');


if($this->input->post('category')==0){

echo "category not selected";

}


}


$this->body['report_data']=$this->Report_model->get_report_data();

//var_dump($this->body['report_data']);
//filter end
$this->load->view('header');
$this->load->view('report_page',$this->body);
$this->load->view('footer');


}




}
