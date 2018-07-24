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

  public function site_setting(){

    $this->body['site_info']=$this->Site_model->site_setting();
    //var_dump($this->body['site_info']);

    $this->load->view('admin/header');
    $this->load->view('admin/site_setting',$this->body);
    $this->load->view('admin/footer');
  }

  public function update_site_text(){



    if( $_FILES['site_logo']['name']==''){


      var_dump($_POST);
      unset($_POST['submit']);




      $update=$this->Site_model->update_data($_POST);
      echo $update;

      if($update){

        $this->session->set_flashdata('msg','Site Logo and Site Text successfully Updated');
        redirect('site_setting');

      }else{


        //error
      }







    }else{



      $file_name = $_FILES['site_logo']['name'];
      $img_upload=$this->Site_model->do_upload($file_name,'site_logo');




      if($img_upload['status']==1){



        $ext=$img_upload['upload_data']['file_ext'];


        unset($_POST['submit']);
        $image_path=base_url().'uploads/site_setting/site_logo'.$ext ;
        $_POST['site_logo']=$image_path;

        $update=$this->Site_model->update_data($_POST);

        if($update){
          $this->session->set_flashdata('msg','Site Logo and Site Text successfully Updated');
          redirect('site_setting');
        }else{
          echo 'errp';
        }


      }else{



        $code= strip_tags($img_upload['error']);




        $this->session->set_flashdata('msg', $code);
        redirect('site_setting');





      }







    }




  }

  public function update_cover(){



    if( $_FILES['cover_photo']['name']==''){

      // var_dump($_POST);
      // exit();



      var_dump($_POST);
      unset($_POST['submit']);




      $update=$this->Site_model->update_data($_POST);
      echo $update;

      if($update){

        $this->session->set_flashdata('msg','Cover Photo and Cover Text successfully Updated');
        redirect('site_setting');

      }else{


        //error
      }







    }else{



      $file_name = $_FILES['cover_photo']['name'];
      $img_upload=$this->Site_model->do_upload($file_name,'cover_photo');




      if($img_upload['status']==1){



        $ext=$img_upload['upload_data']['file_ext'];


        unset($_POST['submit']);
        $image_path=base_url().'uploads/site_setting/cover_photo'.$ext ;
        $_POST['cover_photo']=$image_path;



        $update=$this->Site_model->update_data($_POST);

        if($update){
          $this->session->set_flashdata('msg','Cover Photo and Cover Text successfully Updated');
          redirect('site_setting');
        }else{
          echo 'errp';
        }


      }else{



        $code= strip_tags($img_upload['error']);




        $this->session->set_flashdata('msg', $code);
        redirect('site_setting');



      }
    }


  }


  public function footer_text(){

    unset($_POST['submit']);




    $update=$this->Site_model->update_data($_POST);
    echo $update;

    if($update){

      $this->session->set_flashdata('msg','Footer Right Text successfully Updated');
      redirect('site_setting');

    }else{


      //error
    }


  }


public function important_link(){


  unset($_POST['submit']);




  $update=$this->Site_model->update_data($_POST);
  echo $update;

  if($update){

    $this->session->set_flashdata('msg','Importnat Links successfully Updated');
    redirect('site_setting');

  }else{


    //error
  }



}

public function find_us_links(){


  unset($_POST['submit']);




  $update=$this->Site_model->update_data($_POST);
  echo $update;

  if($update){

    $this->session->set_flashdata('msg','Find us Links successfully Updated');
    redirect('site_setting');

  }else{


    //error
  }



}



public function copyright(){


  unset($_POST['submit']);




  $update=$this->Site_model->update_data($_POST);
  echo $update;

  if($update){

    $this->session->set_flashdata('msg','Copy Right Text successfully Updated');
    redirect('site_setting');

  }else{


    //error
  }



}



}//end
