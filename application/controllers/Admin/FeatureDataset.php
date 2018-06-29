<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FeatureDataset extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    if(($this->session->userdata('logged_in'))!=TRUE)
    {
      
      redirect('admin');
    }else{

    }

    $this->load->dbforge();
    $this->load->helper('url');
    $this->load->model('Feature_model');

  }

  public function feature()
  {

    if(isset($_POST['submit_feature']))
    {

      $d=array(
        "default"=>0,
      );
      $this->Feature_model->update_default($d);

      $id=$this->input->post('default');

      $data=array(

        "default"=>1,

      );

      $update=$this->Feature_model->update_map_download($id,$data,'featured_dataset');
      $this->session->set_flashdata('msg','Featured Dataset Changed');
      redirect('feature');

      //var_dump($_POST);




    }elseif(isset($_POST['submit']))
    {

      $id=$this->input->post('id');
      $file_name = $_FILES['map_pic']['name'];



      $ext = pathinfo($file_name, PATHINFO_EXTENSION);



      $img_upload=$this->Feature_model->do_upload($file_name,$id);



      if($img_upload==1){

        $image_path=base_url() . 'uploads/datasets/'.$id.'.'.$ext ;

        $data=array(

          'photo'=>$image_path

        );

        $update=$this->Feature_model->update_map_download($id,$data,'featured_dataset');
        $this->session->set_flashdata('msgg','successfully Photo Changed');
        redirect('feature');

      }else{

        $code= strip_tags($img_upload['error']);



        $this->session->set_flashdata('msgg', $code);
        redirect('feature');


      }


    }else{
      $this->body['data']=$this->Feature_model->get_feature();
      //var_dump($this->body['data']);
      $this->load->view('admin/header');
      $this->load->view('admin/feature_dataset',$this->body);
      $this->load->view('admin/footer');
    }



  }

  public  function add_feature()
  {

    if(isset($_POST['submit'])){



      unset($_POST['submit']);
      unset($_POST['map_pic']);
      //var_dump($_POST);
      $d=array(
        "default"=>0,
      );
      $this->Feature_model->update_default($d);
      $insert=$this->Feature_model->insert_feature_download($_POST);


      if($insert!=""){

        $file_name = $_FILES['map_pic']['name'];



        $ext = pathinfo($file_name, PATHINFO_EXTENSION);



        $img_upload=$this->Feature_model->do_upload($file_name,$insert);


        if($img_upload==1){

          $image_path=base_url() . 'uploads/datasets/'.$insert.'.'.$ext ;

          $data=array(

            'photo'=>$image_path

          );

          $update=$this->Feature_model->update_map_download($insert,$data,'featured_dataset');
          $this->session->set_flashdata('msgg','Dataset  Added successfully');
          redirect('feature');
        }else{

          $code= strip_tags($img_upload['error']);



          $this->session->set_flashdata('msgg', $code);
          redirect('feature');

        }



      }else{

        //db error
      }

    }else{
      $this->body['cat']=$this->Feature_model->get_tables_data('categories_tbl');
      //  var_dump($this->body['cat']);
      $this->load->view('admin/header');
      $this->load->view('admin/add_feature',$this->body);
      $this->load->view('admin/footer');

    }


  }

  public function delete_feature(){

    $id = $this->input->get('id');
    $delete=$this->Feature_model->delete_map($id);

    $this->session->set_flashdata('msgg','Id number '.$id.' row data was deleted successfully');
    redirect('feature');



  }
  public function edit_feature()
  {
    if(isset($_POST['submit'])){

      unset($_POST['submit']);

      var_dump($_POST);

      $tbl='featured_dataset';

      $update=$this->Feature_model->update_map_download($this->input->post('id'),$_POST,$tbl);

      if($update){


        $this->session->set_flashdata('msgg','Updated successfully');
        redirect('feature');

      }else{

        //db error
      }


    }else{




      $this->body['e_data']=$this->Feature_model->e_data_map(base64_decode($this->input->get('id')));
      $this->body['cat']=$this->Feature_model->get_tables_data('categories_tbl');
      //echo base64_decode($this->input->get('id'));
      var_dump($this->body['e_data']);

      $this->load->view('admin/header');
      $this->load->view('admin/edit_feature',$this->body);
      $this->load->view('admin/footer');

    }
  }

  public function select_feature()
  {
    $this->body['data']=$this->Feature_model->get_feature();
  }

}//end
