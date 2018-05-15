<?php
class Map_model extends CI_Model {

public function get_summary_list($tbl){

$this->db->select('*');
$this->db->where('category_table',$tbl);
$q=$this->db->get('categories_tbl');
  return $q->row_array();
}

public function get_summary($field,$tbl){


 $this->db->select($field.' AS field');
 $this->db->select('ST_AsGeoJSON(the_geom)');
  $query=$this->db->get($tbl);
return $query->result_array();

}

public function default_load(){
  $this->db->select('default_load');
  $this->db->order_by('id','ASC');
  $query=$this->db->get('categories_tbl');
  return $query->result_array();


}


public function get($tbl){


$this->db->select('*');
    $this->db->select('ST_AsGeoJSON(the_geom)');
    $query=$this->db->get($tbl);
    return $query->result_array();
  }



  public function get_cat_map($tbl){
      $this->db->select('*');
        $this->db->order_by('id','ASC');
      $query=$this->db->get($tbl);
      return $query->result_array();
    }


    public function get_layer($tbl){
        $this->db->select('*');
          $this->db->order_by('id','ASC');
        $query=$this->db->get($tbl);
        return $query->result_array();
      }

      public function get_popup($tbl){
          $this->db->select('*');
            $this->db->order_by('id','ASC');
            $this->db->where('tbl_name',$tbl);
          $query=$this->db->get('tbl_lang');
          return $query->result_array();
        }


public function get_nep($tbl,$typ){

  $this->db->select('*');
  $this->db->order_by('id','ASC');
  $this->db->where('tbl_name',$typ);
  $q=$this->db->get($tbl);
return  $q->result_array();


}

public function get_checkedcolumns($tbl){

  $this->db->select('popup_content');

  $this->db->where('category_table',$tbl);
  $q=$this->db->get('categories_tbl');
  return  $q->row_array();



}
public function col_name($tbl){

  $this->db->select('*');

  $this->db->where('tbl_name',$tbl);
  $q=$this->db->get('tbl_lang');
  return  $q->result_array();



}
public function update_popup($tbl,$data){

  $this->db->where('category_table',$tbl);
  $q=$this->db->update('categories_tbl',$data);



}

public function update_style($tbl,$data){

  $this->db->where('category_table',$tbl);
  $q=$this->db->update('categories_tbl',$data);

}


public function update_value($id,$data){
$this->db->where('id',$id);
$this->db->update('categories_tbl',$data);

}

}//end
