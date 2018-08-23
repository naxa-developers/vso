<?php
class Mapapi_model extends CI_Model {





  public function get_list(){

    $this->db->select('category_name,category_table,category_type,category_photo');

    $q=$this->db->get('categories_tbl');
    return $q->result_array();
  }




}
