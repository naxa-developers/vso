<?php
class Report_model extends CI_Model {




public function get_report_data(){


$this->db->select('*');
$this->db->order_by('id','DESC');
$q=$this->db->get('report_tbl');
return $q->result_array();



}


public function search($id){
$q=$this->db->get_where('report_tbl',array ('id'=>$id));
return $q->row_array();
}


public function filter_data($filter){

$this->db->where($filter);
$q=$this->db->get('report_tbl');
return $q->result_array();


}




}
