<?php
class Main_model extends CI_Model {


  public function get_feature()
  {

  $this->db->select('*');
  $this->db->where('default','1');
  $q=$this->db->get('featured_dataset');
  return $q->row_array();


  }


  public function get_post(){

    $this->db->select('*');
    $this->db->select('St_asText(geom)');
    $query=$this->db->get('crops_2015');
    return $query->result();
  }


public function get_contact($cat,$tbl)
{
  $this->db->select('*');
  $this->db->where('category',$cat);
  $q=$this->db->get($tbl);
  return $q->result_array();


}

public function get_contact_csv($cat,$tbl)
{
  $this->db->select('*');
  $this->db->where('category',$cat);
  $q=$this->db->get($tbl);
  return $q ;


}

  public function get_about_where($id)
  {
    $this->db->select('*');
    $this->db->where('id',$id);
    $q=$this->db->get('about');
    return $q->row_array();
  }

  public function get_category(){

    $this->db->select('*');
    $q=$this->db->get('categories_tbl');
    return $q->result_array();

  }

  public function insert($udata,$table){


    $this->db->insert($table, $udata);
  }

  public function get($tbl){

    $this->db->select('*');
    $query=$this->db->get($tbl);
    return $query->result_array();
  }


  public function get_proj_data(){

    $this->db->select('*');
    $query=$this->db->get('project_tbl');
    return $query->result_array();
  }

  public function get_cat($tbl){

    $this->db->select('*');
    $this->db->order_by('id','ASC');
    $query=$this->db->get($tbl);
    return $query->result_array();
  }



  public function get_cat_exposure($tbl){

    $this->db->select('*');

    $this->db->where('category_type','Exposure_Data');
    $this->db->order_by('id','ASC');
    $query=$this->db->get($tbl);
    return $query->result_array();
  }

  public function get_cat_baseline($tbl){

    $this->db->select('*');

    $this->db->where('category_type','Baseline_Data');
    $this->db->order_by('id','ASC');
    $query=$this->db->get($tbl);
    return $query->result_array();
  }

  public function get_cat_hazard($tbl){

    $this->db->select('*');

    $this->db->where('category_type','Hazard_Data');
    $this->db->order_by('id','ASC');
    $query=$this->db->get($tbl);
    return $query->result_array();
  }






}
