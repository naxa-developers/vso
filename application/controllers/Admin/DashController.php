<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DashController extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    
  }


public function dashboard()
{


$this->load->view('admin/header');
$this->load->view('admin/dash.php');
$this->load->view('admin/footer');


}

}