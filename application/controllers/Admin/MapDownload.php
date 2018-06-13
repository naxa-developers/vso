<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MapDownload extends CI_Controller
 {
   function __construct()
    {
      parent::__construct();


		$this->load->model('Map_model');
        }




public function map_show()
{

  if(isset($_POST['submit']))
  {

    $id=$this->input->post('id');
    $file_name = $_FILES['map_pic']['name'];



    $ext = pathinfo($file_name, PATHINFO_EXTENSION);



    $img_upload=$this->Map_model->do_upload($file_name,$id);


    if($img_upload==1){

      $image_path=base_url() . 'uploads/map_download/'.$id.'.'.$ext ;

      $data=array(

        'photo'=>$image_path

      );

      $update=$this->Map_model->update_map_download($id,$data,'maps_download');
      $this->session->set_flashdata('msg','successfully Photo Changed');
      redirect('map_show');

  }else{

    $code= strip_tags($img_upload['error']);



    $this->session->set_flashdata('msg', $code);
    redirect('map_show');


  }


}else{
$this->body['data']= $this->Map_model->get_map_download_data();

$this->load->view('admin/header');
$this->load->view('admin/map_download',$this->body);
$this->load->view('admin/footer');
}

}

public function add_maps(){



  if(isset($_POST['submit'])){



    unset($_POST['submit']);
    unset($_POST['map_pic']);
  //var_dump($_POST);
    $insert=$this->Map_model->insert_map_download($_POST);


    if($insert!=""){

      $file_name = $_FILES['map_pic']['name'];



      $ext = pathinfo($file_name, PATHINFO_EXTENSION);



      $img_upload=$this->Map_model->do_upload($file_name,$insert);


      if($img_upload==1){

        $image_path=base_url() . 'uploads/map_download/'.$insert.'.'.$ext ;

        $data=array(

          'photo'=>$image_path

        );

        $update=$this->Map_model->update_map_download($insert,$data,'maps_download');
        $this->session->set_flashdata('msg','Emergency Contact Added successfully');
        redirect('map_show');
  }else{

  $code= strip_tags($img_upload['error']);



  $this->session->set_flashdata('msg', $code);
  redirect('map_show');

  }



    }else{

      //db error
    }

  }else{

    $this->load->view('admin/header');
    $this->load->view('admin/add_map_download');
    $this->load->view('admin/footer');

  }



}

public function edit_map()
{


  if(isset($_POST['submit'])){

    unset($_POST['submit']);

    var_dump($_POST);

    $tbl='maps_download';

    $update=$this->Map_model->update_map_download($this->input->post('id'),$_POST,$tbl);

    if($update){


      $this->session->set_flashdata('msg','Updated successfully');
      redirect('map_show');

    }else{

      //db error
    }


  }else{




    $this->body['e_data']=$this->Map_model->e_data_map(base64_decode($this->input->get('id')));
    //echo base64_decode($this->input->get('id'));
    var_dump($this->body['e_data']);

    $this->load->view('admin/header');
    $this->load->view('admin/edit_map_download',$this->body);
    $this->load->view('admin/footer');

  }

}

public function delete_map(){

$id = $this->input->get('id');
$delete=$this->Map_model->delete_map($id);

$this->session->set_flashdata('msg','Id number '.$id.' row data was deleted successfully');
redirect('map_show');



}


}
