<?php
class Layers_model extends CI_Model {



public function insert_layer($data){


return $this->db->insert('layers_tbl',$data);


}

public function get_layers($tbl){

$this->db->select('*');
$query=$this->db->get($tbl);
 return $query->result_array();



}
public function get_edit_layers($tbl,$id){

$this->db->select('*');
$this->db->where('gid',$id);

$query=$this->db->get($tbl);
 return $query->result_array();



}












}
