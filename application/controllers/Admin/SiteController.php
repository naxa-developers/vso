<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SiteController extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    // if(($this->session->userdata('logged_in'))!=TRUE)
    // {
    //
    //   redirect('admin');
    // }else{
    //
    // }

    $this->load->helper('url');
    $this->load->library('form_validation');
    $this->load->model('Site_model');
  }

public function testt(){

  $this->load->view('admin/header');
  $this->load->view('admin/site_setting');
  $this->load->view('admin/footer');
}



}
