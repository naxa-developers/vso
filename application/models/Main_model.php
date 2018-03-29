<?php
class Main_model extends CI_Model {





  public function get_post(){

    $this->db->select('*');
    $this->db->select('St_asText(geom)');
    $query=$this->db->get('crops_2015');
    return $query->result();
  }




  public function insert($udata,$table){


    $this->db->insert($table, $udata);
  }

  public function get($tbl){

    $this->db->select('*');
    $query=$this->db->get($tbl);
    return $query->result_array();
  }

  public function get_cat($tbl){

    $this->db->select('*');
    $query=$this->db->get($tbl);
    return $query->result();
  }






}
