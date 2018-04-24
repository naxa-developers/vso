<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TableController extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    $this->load->helper('url');
    $this->load->model('Table_model');
    $this->load->model('Dash_model');
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

public function csv_tbl(){


$tbl_name=base64_decode($this->input->get('tbl')) ;


if(isset($_POST['submit'])){


$file=$_FILES ["fileToUpload"];

// $tbl_name=strstr($file['name'], '.', true);
// $tbl_name=strtolower($tbl_name);

//svar_dump($file);

$csv_file=$file['tmp_name'];
$fp = fopen($csv_file, 'r');
$frow = fgetcsv($fp);
//$frow=trim($frow," ");
//var_dump($frow);
//exit();
   $n=sizeof($frow);
   $row=array();
for($i=0;$i<$n;$i++){
//echo $frow[$i];
  array_push($row,trim($frow[$i]," "));
}

// 
// var_dump($row);
// exit();
if(in_array("Latitude",$row,TRUE)){



if(in_array('Longitude',$row,TRUE)){




if($row[0]=='Longitude' || $row[1]=='Latitude'  ){


  if( $this->db->table_exists($tbl_name) == FALSE ){

    $this->dbforge->add_field('id');
    $create=$this->dbforge->create_table($tbl_name, FALSE);

var_dump($create);

if($create==true){

  for($i=0;$i<sizeof($row);$i++){

    $fields =
    array(

      'a'.$i=> array(
        'type' =>'varchar',

      ),
    );

    $add_column=$this->dbforge->add_column($tbl_name,$fields);

// inserting corresponding nepali and englis column name in table

   $data_lang=array(

   'eng_lang'=>'a'.$i,
   'nepali_lang'=>$row[$i],
   'tbl_name'=>$tbl_name,


   );

     $lang_insert=$this->Dash_model->insert_lang('tbl_lang',$data_lang);



  }

  if($add_column==true){



     $fields=$this->db->list_fields($tbl_name);
     unset($fields[0]);
     $field_name=implode(",",$fields);



     $filename=$file['name'];




     $c=$this->Table_model->table_copy($csv_file,$filename,$field_name,$tbl_name);

     $this->session->set_flashdata('msg',$tbl_name.' table with '.sizeof($row).' Columns Successfully Added');


      redirect('csv_tbl');


  }else{

  //table not created

  }



} else{

  echo 'table not created';
}
}else{


  //table exist
}

}else{




$this->session->set_flashdata('msg',' Order of latitude and longitude not correct in csv. 1st column shold be longitude and 2nd latitude');
redirect('csv_tbl');

}



}else{


$this->session->set_flashdata('msg','Column name Longitude not found in Csv');
redirect('csv_tbl');

}



}else{


  $this->session->set_flashdata('msg','Column name Latitude not found in CSV');

// $update_cat=$this->Table_model->insert_tbl($data,$id);

   redirect('csv_tbl');

}

}else{
$this->load->view('admin/header');
$this->load->view('admin/csv_file');
$this->load->view('admin/footer');



}






}




}
