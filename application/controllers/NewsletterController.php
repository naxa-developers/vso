<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class NewsletterController extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    $this->load->helper('url');
    $this->load->model('Newsletter');

  }

public function register(){

var_dump($this->input->post('email'));
$data=array(

'email'=>$this->input->post('email'),


);
$insert=$this->Newsletter->register($data);

if($insert!=""){

  redirect('main');
}
}

public function mail()
{

  $this->Newsletter->send_mail('Newsletter');
}


}//end
