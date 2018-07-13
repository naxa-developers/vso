<?php
class Site_model extends CI_Model {

public function site_setting(){

$this->db->select('*');
$q=$this->db->get('site_setting');
return $q->row_array();


}

public function update_data($data){

$this->db->where('id',1);
$res=$this->db->update('site_setting',$data);
return $res;

}


public function do_upload($filename,$name)
{

  $field_name                     = $name;
  $config['upload_path']          = './uploads/site_setting/';
  $config['allowed_types']        = 'jpg|png';
  $config['max_size']             = 7000;
  $config['overwrite']             = TRUE;
  $config['file_name']           = $name;

  $this->load->library('upload', $config);

  if ( ! $this->upload->do_upload($field_name))
  {
    $error = array('error' => $this->upload->display_errors());
    $error['status']=0;
    return $error;


  }
  else
  {

    $data = array('upload_data' => $this->upload->data());
    $data['status']=1;

    return $data;

  }
}

}
