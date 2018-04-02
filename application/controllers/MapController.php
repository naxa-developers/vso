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
  $tbl1="wards_changu";
$tbl2="mun_changu";
  
$tbl=array(
            'mun_changu',
           'wards_changu',
           
);

var_dump($tbl);

for($i=0; $i<sizeof($tbl); $i++){

$get_map=$this->Map_model->get($tbl[$i]);
//var_dump($get_map);$
$fields=$this->db->list_fields($tbl[$i]);

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
 $new_data = array(
      'type' => 'FeatureCollection',
      'features' => $features,
    );

   

//var_dump(json_encode($new_data, JSON_NUMERIC_CHECK));

}

 $this->body['geo']= json_encode($new_data, JSON_NUMERIC_CHECK);

   $this->load->view('header');
   $this->load->view('mapt');
   $this->load->view('map/map',$this->body);
   $this->load->view('footer');


}


}//end
