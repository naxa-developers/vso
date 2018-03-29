<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UploadController extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
  }






public function csv_upload(){

echo $this->input->get("tbl");
$this->load->view("admin/header");
$this->load->view("admin/csv_file");
$this->load->view("admin/footer");






}







}//main
