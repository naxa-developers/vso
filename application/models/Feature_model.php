<?php
class About_model extends CI_Model {






public function get_feature_home()
{

$this->db->select('*');
// $this->db->where('default_load','1');
$q=$this->db->get('featured_dataset');
return $q->result_array();


}


}
