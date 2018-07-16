<?php
class Dash_model extends CI_Model {



public function delete_lang($tbl){

$this->db->where('tbl_name',$tbl);
$this->db->delete('tbl_lang');


}

public function get_sub_cat_style($tbl){

  $this->db->where('category_table',$tbl);
  $q=$this->db->get('categories_tbl');
  return $q->row_array();



}



  public function create_geom($long,$lat,$tbl){

  $query= "UPDATE $tbl SET the_geom =  ST_PointFromText('POINT(' || $long || ' ' || $lat || ')', 27700)";
  $this->db->query($query);

  }

  public function get($tbl){


  $this->db->select('*');
      $this->db->select('ST_AsGeoJSON(the_geom)');
      $query=$this->db->get($tbl);
      return $query->result_array();
    }

    public function get_tbl_type($tbl){


        $this->db->select('*');
        $this->db->select('ST_AsGeoJSON(the_geom)');
        $this->db->limit(1);
        $query=$this->db->get($tbl);
        return $query->row_array();
      }

  // create categories

public function get_sub_cat_data($tbl,$data,$col){

$this->db->select('*');
$this->db->select('ST_AsGeoJSON(the_geom)');
$this->db->where($col,$data);
$res=$this->db->get($tbl);
return $res->result_array();

}

  public function do_upload($filename,$name)
  {

    $field_name                     ='cat_pic';
    $config['upload_path']          = './uploads/categories/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 7000;
    $config['overwrite']             = TRUE;
    $config['file_name']           = $name;

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload($field_name))
    {
      $error = array('error' => $this->upload->display_errors());
      return $error;


    }
    else
    {

      $data = array('upload_data' => $this->upload->data());

      return $data;

    }
  }

  public function do_upload_marker($filename,$name)
  {

    $field_name                     ='cat_pic';
    $config['upload_path']          = './uploads/icons/map/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 7000;
    $config['overwrite']             = TRUE;
    $config['file_name']           = $name;

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload($field_name))
    {
      $error = array('error' => $this->upload->display_errors());
      return $error;


    }
    else
    {


      return 1;

    }
  }





  public function insert_cat($table, $udata)
  {
    $this->db->insert($table, $udata);
    if ($this->db->affected_rows() > 0)
    {
     return $this->db->insert_id();
    }
    else
    {
      $error = $this->db->error();
      return $error;
    }
  }

  // end categories

  // table operations

  public function get_tables_data($tbl){ //get data of table

    $this->db->select('*');
    $this->db->order_by('id','ASC');
    $q=$this->db->get($tbl);
    return $q->result_array();


  }

  public function get_default_cat_data($tbl){ //get data of table

    $this->db->select('*');
    $this->db->order_by('id','ASC');
    $this->db->where('default_load',1);
    $this->db->limit(1);
    $q=$this->db->get($tbl);
    return $q->row_array();


  }

  public function get_count_views_datasets($tbl){ //get data of table

    $this->db->select('*');
    $this->db->where('category_table',$tbl);
    $q=$this->db->get('categories_tbl');
    return $q->row_array();


  }

  public function get_tables_data_lang($tbl,$tble_field){ //get data of table

    $this->db->select('*');
    $this->db->where('tbl_name',$tble_field);
    $this->db->order_by('id','ASC');
    $q=$this->db->get($tbl);
    return $q->result_array();


  }
  public function edit_get_data($id,$tbl){ // edit data of table


    $this->db->where('id',$id);
    $q=$this->db->get($tbl);
    return $q->row_array();


  }

  public function update($id,$data,$tbl){ // update the edited table

    $this->db->where('id',$id);
    $q=$this->db->update($tbl,$data);
    if($q){
      return 1;
    }else{
      return 0;
    }
  }

  public function cat_update($id,$data){ // update the edited table

    $this->db->where('id',$id);
    $q=$this->db->update('categories_tbl',$data);
    if($q){
      return 1;
    }else{
      return 0;
    }
  }
  // end table operation


  // view all cat table

  public function view_cat_tables(){ //get list of cat table from db

    $tables = $this->db->list_tables();
    return $tables;


  }


 //storing column name in nepali and english

   public function insert_lang($table,$data){

     $this->db->insert($table, $data);
     if ($this->db->affected_rows() > 0)
     {
      return $this->db->insert_id();
     }
     else
     {
       $error = $this->db->error();
       return $error;
     }
   }

public function delete_data($id,$table_name){

  $this->db->where('id', $id);
  $this->db->delete($table_name);



}


public function get_sub_cat($col,$tbl){

  $this->db->select($col);
  
  $this->db->distinct();
  $res=$this->db->get($tbl);
  return $res->result_array();
}

  // end cat tables

  public function update_sub_cat($data,$tbl){ // update the edited table

    $this->db->where('category_table',$tbl);
    $q=$this->db->update('categories_tbl',$data);
    if($q){
      return 1;
    }else{
      return 0;
    }
  }

}//main
