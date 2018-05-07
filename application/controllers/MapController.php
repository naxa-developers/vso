<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MapController extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    $this->load->helper('url');
    $this->load->model('Map_model');
    $this->load->model('Dash_model');
  }


public function map_page(){

  //administrative laayer start
$layers=$this->Map_model->get_layer('layers_tbl');
$this->body['admin_layer']=$layers;

//var_dump($this->body['admin_layer']);
foreach($layers as $l){


  $tbl[]=$l['layer_table'];
}
// $tbl=array(
//            'waterways_changu',
//            'mun_changu',
//            'wards_changu',
//            'road_changu',


//);
//var_dump($tbl);

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


 // $this->body['nep']=json_encode($this->Map_model->get_nep('tbl_lang','school')); nep
 //
 // $fields=$this->db->list_fields('school');
 // unset($fields[0]);
 // $this->body['field']=$fields; nep

$cat_tbl=$this->Map_model->get_layer('categories_tbl');
$this->body['category_name']=$cat_tbl;

foreach($cat_tbl as $tbl){


  $cat_tbles[]=$tbl['category_table'];
}
//var_dump($cat_tbles);

$category_data = array();


for($i=0; $i<sizeof($cat_tbles); $i++){




$get_map=$this->Dash_model->get($cat_tbles[$i]);
//var_dump($get_map);
if (isset($features_cat)){

      $features_cat = array();
    }

foreach($get_map as $cat_data){

  $cat_ddata=$cat_data ;
  unset($cat_data['st_asgeojson']);

  $features_cat[]= array(
   'type' =>'Feature',
   'properties'=>$cat_data,
   'geometry'=>json_decode($cat_ddata['st_asgeojson'],JSON_NUMERIC_CHECK)

  );


}

$category= $cat_tbles[$i];

$$category= array(
   'type' => 'FeatureCollection',
   'features' => $features_cat,
 );

//var_dump($$category);
array_push($category_data,$$category);

}



//var_dump($this->body['field']);






  $this->body['cat_map_layer']= json_encode($category_data, JSON_NUMERIC_CHECK);
  $this->body['category_tbl']= json_encode($cat_tbles, JSON_NUMERIC_CHECK);
// var_dump($map_cat);
 //end cat layer

   $this->load->view('header');
 $this->load->view('mapt',$this->body);
   $this->load->view('map/map',$this->body);
   $this->load->view('footer');


}


public function  category_map(){

$this->body['data']=$this->Dash_model->get_tables_data('categories_tbl');

$this->load->view('header');
$this->load->view('category.php',$this->body);
$this->load->view('footer');



}






}//end
