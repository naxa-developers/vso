<?php
class Report_model extends CI_Model {




public function get_report_data(){


$this->db->select('*');
$this->db->order_by('id','DESC');
$q=$this->db->get('report_tbl');
return $q->result_array();



}

}
