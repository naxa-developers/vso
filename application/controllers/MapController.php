<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MapController extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    $this->load->helper('url');
    $this->load->model('Map_model');
  }


public function map_page(){

  //administrative laayer start

$tbl=array(

            'waterways_changu',
           'mun_changu',
           'wards_changu',
           'road_changu',


);

// var_dump($tbl);

$array_geojson = array();

for($i=0; $i<sizeof($tbl); $i++){

$get_map=$this->Map_model->get($tbl[$i]);
//var_dump($get_map);$
//$fields=$this->db->list_fields($tbl[$i]);
if (isset($features)){

      $features = array();
    }
foreach ($get_map as $data) {



$ddata=$data ;
unset($data['st_asgeojson']);
//var_dump($data);

   $features[]= array(
    "type" =>"Feature",
    "properties"=>$data,
    "geometry"=>json_decode($ddata['st_asgeojson'],JSON_NUMERIC_CHECK),
   );

}

$a = $tbl[$i];

  $$a  = array(
      'type' => 'FeatureCollection',
      'features' => $features,
    );



// var_dump(json_encode($data, JSON_NUMERIC_CHECK));
// echo("VR");

  array_push($array_geojson , $$a);


}






    $this->body['layer_name']= json_encode($tbl, JSON_NUMERIC_CHECK);
 $this->body['geo']= json_encode($array_geojson, JSON_NUMERIC_CHECK);


 // layer --ends

 //category layer start

$get_map=$this->Map_model->get_cat_map('school');
//$this->Map_model->get_nep('tbl_lang');
$fields=$this->db->list_fields('school');
unset($fields[0]);
$this->body['field']=$fields;



foreach($get_map as $cat_data){

  $features_cat[]= array(
   "type" =>"Feature",
   "properties"=>$cat_data,
   "geometry"=>array(

     'type'=>'Point',
     'coordinates'=>array(
      $cat_data['a0'],
      $cat_data['a1'],
         1.0
     ),
   ),
  );


}

$map_cat= array(
   'type' => 'FeatureCollection',
   'features' => $features_cat,
 );


  $this->body['cat_map_layer']= json_encode($map_cat, JSON_NUMERIC_CHECK);
// var_dump($map_cat);
 //end cat layer

   $this->load->view('header');
 $this->load->view('mapt');
   $this->load->view('map/map',$this->body);
   $this->load->view('footer');


}


}//end
