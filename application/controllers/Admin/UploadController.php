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



public function  emergency_contact(){

  $this->body['data']=$this->Upload_model->get_emergency_con();

  $this->load->view('admin/header');
  $this->load->view('admin/emergency_contact_tbl',$this->body);
  $this->load->view('admin/footer');



}

public function delete_emerg(){

$delete=$this->Upload_model->delete($this->input->get('id'));

if($delete){

$this->session->set_flashdata('msg','Successfully Deleted');
redirect('emergency_contact');



}else{

  //db error
}


}


public function edit_emerg(){



if(isset($_POST['submit'])){


$data=array(

'name'=>$this->input->post('name'),
'address'=>$this->input->post('address'),
'contact_number'=>$this->input->post('contact_number'),


);


$update=$this->Upload_model->update_emerg($this->input->post('id'),$data);

if($update){


$this->session->set_flashdata('msg','Updated successfully');
redirect('emergency_contact');

}else{

  //db error
}


}else{




$this->body['e_data']=$this->Upload_model->e_data(base64_decode($this->input->get('id')));
 echo base64_decode($this->input->get('id'));
 var_dump($this->body['e_data']);

    $this->load->view('admin/header');
    $this->load->view('admin/edit_emerg',$this->body);
    $this->load->view('admin/footer');

}


}

public function add_emergency(){

if(isset($_POST['submit'])){

  $data=array(

  'name'=>$this->input->post('name'),
  'address'=>$this->input->post('address'),
  'contact_number'=>$this->input->post('contact_number'),


  );


  $insert=$this->Upload_model->insert_emrg($data);
  if($insert){

    $this->session->set_flashdata('msg','Emergency Contact Added successfully');
    redirect('emergency_contact');


  }else{

    //db error
  }

}else{

  $this->load->view('admin/header');
  $this->load->view('admin/add_emergency');
  $this->load->view('admin/footer');

}







}



}//main
