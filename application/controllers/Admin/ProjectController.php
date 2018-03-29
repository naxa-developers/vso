<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ProjectController extends CI_Controller
{
  function __construct()
  {
    parent::__construct();


    $this->load->helper('url');
    //$this->load->model('Project_model');
    $this->load->library('form_validation');
  }

public function add_proj(){

  

  $this->form_validation->set_rules('proj_name','Name is required','required');
  $this->form_validation->set_rules('proj_name','Name is required','required');

  if($this->form_validation->run() == FALSE){

    $this->load->view('admin/header');
    $this->load->view('admin/create_project');
    $this->load->view('admin/footer');


  }else{



  }






}


}
