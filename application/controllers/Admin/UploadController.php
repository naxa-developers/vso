<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UploadController extends CI_Controller
{
  function __construct()
  {
    parent::__construct();


    $this->load->model('Upload_model');
  }






  public function csv_upload(){

    echo $this->input->get("tbl");
    $this->load->view("admin/header");
    $this->load->view("admin/csv_file");
    $this->load->view("admin/footer");


  }

  public function bck_img(){



    if(isset($_POST['submit'])){

      $file_name = $_FILES['back_pic']['name'];

      $ext = pathinfo($file_name, PATHINFO_EXTENSION);
      $proj_name='p';


      $img_upload=$this->Upload_model->do_upload($file_name,$proj_name);

      if($img_upload==1){

        $image_path=base_url() . 'assets/img/'.$proj_name.'.'.$ext ;

        $data=array(

          'background_img_path'=>$image_path

        );

        $update=$this->Upload_model->update_data($data);

        if($update==1){


          $this->session->set_flashdata('msg', 'Background Image successfully Changed');
          redirect('background');

        }else{

          //db error
        }

      }else{


        $code= strip_tags($img_upload['error']);



        $this->session->set_flashdata('msg', $code);
        redirect('background');
      }









    }else{

      $this->load->view('admin/header');
      $this->load->view('admin/upload_bck_img');
      $this->load->view('admin/footer');





    }


  }

  //emergency contact start

  public function  emergency_contact(){

    $cat=$this->input->get('cat');


    $this->body['data']=$this->Upload_model->get_emergency_con($cat);
    $this->body['cat']=$cat;

    $this->load->view('admin/header');
    $this->load->view('admin/emergency_contact_tbl',$this->body);
    $this->load->view('admin/footer');



  }

  public function delete_emerg(){

      $cat=$this->input->get('cat');
      $tbl=$this->input->get('tbl');
      echo $tbl;
    $delete=$this->Upload_model->delete($this->input->get('id'),$tbl);


    if($delete){

      $this->session->set_flashdata('msg','Successfully Deleted');

      if($tbl=='emergency_contact'){
          redirect('emergency_contact?cat='.$cat);

}else{
    redirect('emergency_personnel?cat='.$cat);
}


    }else{

      //db error
    }


  }


  public function edit_emerg(){

    $cat=$this->input->get('cat');
    $tbl=$this->input->get('tbl');

    if(isset($_POST['submit'])){

      unset($_POST['submit']);



      $update=$this->Upload_model->update_emerg($this->input->post('id'),$_POST,$tbl);

      if($update){


        $this->session->set_flashdata('msg','Updated successfully');
        redirect('emergency_contact?cat='.$cat);

      }else{

        //db error
      }


    }else{




      $this->body['e_data']=$this->Upload_model->e_data(base64_decode($this->input->get('id')));
      //echo base64_decode($this->input->get('id'));
      // var_dump($this->body['e_data']);

      $this->load->view('admin/header');
      $this->load->view('admin/edit_emerg',$this->body);
      $this->load->view('admin/footer');

    }


  }

  public function add_emergency(){

    $cat=$this->input->get('cat');

    if(isset($_POST['submit'])){


      $_POST['category']=$cat;
      unset($_POST['submit']);

      $insert=$this->Upload_model->insert_emrg($_POST);
      if($insert){

        $this->session->set_flashdata('msg','Emergency Contact Added successfully');
        redirect('emergency_contact?cat='.$cat);


      }else{

        //db error
      }

    }else{

      $this->load->view('admin/header');
      $this->load->view('admin/add_emergency');
      $this->load->view('admin/footer');

    }







  }


  //emergency contact end






  //emergency contact personal

 public function emergency_personnel()
{

  $cat=$this->input->get('cat');
//echo $cat ;

  $this->body['data']=$this->Upload_model->get_emergency_per($cat);
  $this->body['cat']=$cat;

  $this->load->view('admin/header');
  $this->load->view('admin/emergency_personnel_tbl',$this->body);
  $this->load->view('admin/footer');

}



public function add_emergency_personnel(){

  $cat=$this->input->get('cat');

  if(isset($_POST['submit'])){


    $_POST['category']=$cat;
    unset($_POST['submit']);

    $insert=$this->Upload_model->insert_emrg_personnel($_POST);
    if($insert){

      $this->session->set_flashdata('msg','Emergency Contact Added successfully');
      redirect('emergency_personnel?cat='.$cat);


    }else{

      //db error
    }

  }else{

    $this->load->view('admin/header');
    $this->load->view('admin/add_emergency_personnel');
    $this->load->view('admin/footer');

  }
}

public function edit_emerg_personnel(){

  $cat=$this->input->get('cat');
  $tbl=$this->input->get('tbl');

  if(isset($_POST['submit'])){

    unset($_POST['submit']);



    $update=$this->Upload_model->update_emerg($this->input->post('id'),$_POST,$tbl);

    if($update){


      $this->session->set_flashdata('msg','Updated successfully');
      redirect('emergency_personnel?cat='.$cat);

    }else{

      //db error
    }


  }else{




    $this->body['e_data']=$this->Upload_model->e_data_personnel(base64_decode($this->input->get('id')));
    //echo base64_decode($this->input->get('id'));
    // var_dump($this->body['e_data']);

    $this->load->view('admin/header');
    $this->load->view('admin/edit_emerg_personnel',$this->body);
    $this->load->view('admin/footer');

  }


}




  //emergency contact personal end

  public function add_icon(){

    if(isset($_POST['submit'])){

      $file_name = $_FILES['back_pic']['name'];

      $ext = pathinfo($file_name, PATHINFO_EXTENSION);
      $proj_name='icon'.time();


      $img_upload=$this->Upload_model->do_upload_icon($file_name,$proj_name);

      if($img_upload==1){

        $image_path=base_url() . 'uploads/icons/'.$proj_name.'.'.$ext ;

        $data=array(

          'icon_path'=>$image_path

        );

        $update=$this->Upload_model->insert_icon($data);
        //var_dump($update);
        if($update==NULL){


          $this->session->set_flashdata('msg', 'Icon successfully Added');
          redirect('add_icon');

        }else{

          //db error
        }

      }else{


        $code= strip_tags($img_upload['error']);



        $this->session->set_flashdata('msg', $code);
        redirect('add_icon');
      }









    }else{


      $this->load->view('admin/header');
      $this->load->view('admin/icons');
      $this->load->view('admin/footer');

    }

  }

}//main
