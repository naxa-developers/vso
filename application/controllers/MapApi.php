<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MapApi extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    $this->load->model('Mapapi_model');
    $this->load->model('Table_model');
  }


public function get_category(){


$category=$this->Mapapi_model->get_list();
//var_dump($category);

$response['status']=200;
$response['data']=$category;
echo json_encode($response);
}


public function geojson(){


  $tbl=$_POST['table'];

if(!$this->db->table_exists($tbl)){

$response['msg']='Data table does not exists';
echo json_encode($response);

}else{
  $d=$this->Table_model->get_lang($tbl);
  /* get the object   */
  $report = $this->Table_model->get_asjson($d,$tbl);
  $dataset_data=$report->result_array();


  foreach($dataset_data as $data){

    $ddata=$data ;
    unset($data['st_asgeojson']);



    $features_cat[]= array(
      'type' =>'Feature',
      'properties'=>$data,
      'geometry'=>json_decode($ddata['st_asgeojson'],JSON_NUMERIC_CHECK)

    );


  }



  $dataset_array= array(
    'type' => 'FeatureCollection',
    'features' => $features_cat,
  );

$dataset_geojson=json_encode($dataset_array);
echo $dataset_geojson;

}


}

}
