<?php
class Site_model extends CI_Model {

public function site_setting(){

$this->db->select('*');
$q=$this->db->get('site_setting');
return $q->row_array();


}

}
