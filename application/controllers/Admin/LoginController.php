<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginController extends CI_Controller
 {
   function __construct()
    {
      parent::__construct();

    $this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->model('Login_model');
        }


public function index(){


   $this->form_validation->set_rules('username', 'Username', 'required');
   $this->form_validation->set_rules('password', 'Password', 'required');

   if ($this->form_validation->run() == FALSE){

  //  echo validation_errors();
    $this->load->view('admin/login-page');

   }else{

    $username=$this->input->post('username');
    $pass=$this->input->post('password');
    $login_condition = array("username"=>$username);

    $user_data=$this->Login_model->login($login_condition);

    if($user_data!= FALSE){

        $hash=$user_data['password'];

        $check=$this->Login_model->validate_user($pass,$hash);

       if($check==TRUE){

      redirect('dashboard');

       }else{


      $this->session->set_flashdata('Login', 'Incorrect Password, Try Again');
      redirect('admin');
       }


    }else{


    $this->session->set_flashdata('Login', 'Incorrect username, Try Again');
    redirect('admin');
    }

 }


}//method end





public function dashboard(){

  $this->load->view('dashboard');
}


 }//main controler
