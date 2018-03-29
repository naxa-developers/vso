<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TableController extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    $this->load->helper('url');
    $this->load->model('Table_model');
      $this->load->dbforge();
  }





  public function copy_table(){

$table_name=base64_decode($this->input->get('tbl'));



    if(isset($_POST['submit'])){


      $fields=$this->db->list_fields($table_name);
      unset($fields[0]);
      $field_name=implode(",",$fields);
      //(a0,a1,a2,);




      $f=($_FILES["fileToUpload"]);
      $path=$f["tmp_name"];
      $filename=$f["name"];




      $c=$this->Table_model->table_copy($path,$filename,$field_name,$table_name);


      if($c==1){

        $this->session->set_flashdata('msg','Data Was successfully Added');
        redirect('data_tables?tbl_name='.base64_encode($table_name));

      }else{

        $this->session->set_flashdata('msg','Id number '.$id.' row data was deleted successfully');
        redirect('data_tables?tbl_name='.base64_encode($table_name));

      }

    }else{

      $this->load->view('admin/header');
      $this->load->view('admin/csv_upload');
      $this->load->view('admin/footer');

    }


}


  public function create_table(){ //create table postgress

    $tbl_nme='categories_tbl';

    $c=$this->Table_model->create_table($tbl_nme);


  }

  public function index(){

    echo 'done';
  }


  public function insert_test(){


    $data = array(

      'name'=>'sagar',
      'email'=>'sagar@123',
      'contact_num'=>'35654892',
      'username'=>'sagar',
      'password'=>'sgar',
      'user_type'=>1

    );

    $table='users';
    $this->Main_model->insert($data,$table);

}






}
