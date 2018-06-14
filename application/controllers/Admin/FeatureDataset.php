<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FeatureDataset extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    $this->load->dbforge();
    $this->load->helper('url');
    $this->load->model('feature_model');

  }

   public function feature()
{
  $this->body['data']=$this->feature_model->get_feature();
  $this->load->view('admin/header');
  $this->load->view('admin/feature_dataset',$this->body);
  $this->load->view('admin/footer');




}



}
