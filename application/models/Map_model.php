<?php
class Map_model extends CI_Model {



public function get($tbl){

    
$this->db->select('*');
    $this->db->select('ST_AsGeoJSON(the_geom)');
    $query=$this->db->get($tbl);
    return $query->result_array();  
  }


}
