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

public function do_upload($filename,$name)
{

  $field_name                     ='photo';
  $config['upload_path']          = './uploads/report/';
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


public function update_img_path($id,$data){

  $this->db->where('id',$id);
  $this->db->update('report_tbl',$data);
}


public function insert($data_array){

$this->db->insert('report_tbl',$data_array);
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

}
