<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MapController extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    $this->load->helper('url');
    $this->load->model('Map_model');
    $this->load->model('Dash_model');
    $this->load->model('Report_model');
  }



public function map_download()
{

 $this->body['data']=$this->Map_model->get_map_download_data();
  $this->load->view('header');
  $this->load->view('map_download',$this->body);
  $this->load->view('footer');

}

  // public function map_page(){
  //
  //   //administrative laayer start
  // $layers=$this->Map_model->get_layer('layers_tbl');
  // $this->body['admin_layer']=$layers;
  //
  // //var_dump($this->body['admin_layer']);
  // // foreach($layers as $l){
  // //
  // //
  // //   $tbl[]=$l['layer_table'];
  // // }
  // // // $tbl=array(
  // // //            'waterways_changu',
  // // //            'mun_changu',
  // // //            'wards_changu',
  // // //            'road_changu',
  // //
  // //
  // // //);
  // // //var_dump($tbl);
  // //
  // // $array_geojson = array();
  // //
  // // for($i=0; $i<sizeof($tbl); $i++){
  // //
  // // $get_map=$this->Map_model->get($tbl[$i]);
  // // //var_dump($get_map);$
  // // //$fields=$this->db->list_fields($tbl[$i]);
  // // if (isset($features)){
  // //
  // //       $features = array();
  // //     }
  // // foreach ($get_map as $data) {
  // //
  // //
  // //
  // // $ddata=$data ;
  // // unset($data['st_asgeojson']);
  // // //var_dump($data);
  // //
  // //    $features[]= array(
  // //     "type" =>"Feature",
  // //     "properties"=>$data,
  // //     "geometry"=>json_decode($ddata['st_asgeojson'],JSON_NUMERIC_CHECK),
  // //    );
  // //
  // // }
  // //
  // // $a = $tbl[$i];
  // //
  // //   $$a  = array(
  // //       'type' => 'FeatureCollection',
  // //       'features' => $features,
  // //     );
  // //
  // //
  // //
  // // // var_dump(json_encode($data, JSON_NUMERIC_CHECK));
  // // // echo("VR");
  // //
  // //   array_push($array_geojson , $$a);
  // //
  // //
  // // }
  // //
  // //
  // //
  // //
  // //
  // //
  // //     $this->body['layer_name']= json_encode($tbl, JSON_NUMERIC_CHECK);
  // //  $this->body['geo']= json_encode($array_geojson, JSON_NUMERIC_CHECK);
  //
  //
  //  // layer --ends
  //
  //  //category layer start
  //
  //
  //  // $this->body['nep']=json_encode($this->Map_model->get_nep('tbl_lang','school')); nep
  //  //
  //  // $fields=$this->db->list_fields('school');
  //  // unset($fields[0]);
  //  // $this->body['field']=$fields; nep
  //
  // $cat_tbl=$this->Map_model->get_layer('categories_tbl');
  // $this->body['category_name']=$cat_tbl;
  //
  // //$popup = array();
  // foreach($cat_tbl as $tbl){
  //
  //
  //   $cat_tbles[]=$tbl['category_table'];
  //   //array_push($popup, trim(trim(json_encode($tbl['popup_content'],JSON_NUMERIC_CHECK),'"['),']"'));
  // }
  // //var_dump($popup);
  // //exit();
  //
  //
  // $category_data = array();
  //
  //
  // for($i=0; $i<sizeof($cat_tbles); $i++){
  //
  //
  //
  //
  // $get_map=$this->Dash_model->get($cat_tbles[$i]);
  // //var_dump($get_map);
  // if (isset($features_cat)){
  //
  //       $features_cat = array();
  //     }
  //
  // foreach($get_map as $cat_data){
  //
  //   $cat_ddata=$cat_data ;
  //   unset($cat_data['st_asgeojson']);
  //
  //   $features_cat[]= array(
  //    'type' =>'Feature',
  //    'properties'=>$cat_data,
  //    'geometry'=>json_decode($cat_ddata['st_asgeojson'],JSON_NUMERIC_CHECK)
  //
  //   );
  //
  //
  // }
  //
  // $category= $cat_tbles[$i];
  //
  // $$category= array(
  //    'type' => 'FeatureCollection',
  //    'features' => $features_cat,
  //  );
  //
  // //var_dump($$category);
  // array_push($category_data,$$category);
  //
  // }
  //
  //
  //
  // //var_dump($this->body['field']);
  //
  //
  //
  //
  //
  //
  //   $this->body['cat_map_layer']= json_encode($category_data, JSON_NUMERIC_CHECK);
  //   $this->body['category_tbl']= json_encode($cat_tbles, JSON_NUMERIC_CHECK);
  //   $this->body['popup_content']= json_encode($popup, JSON_NUMERIC_CHECK);
  // // var_dump($map_cat);
  //  //end cat layer
  //
  //    $this->load->view('header');
  //  $this->load->view('mapt',$this->body);
  //    $this->load->view('map/map',$this->body);
  //    $this->load->view('footer');
  //
  //
  // }


  public function  category_map(){

    // $layers=$this->Map_model->get_layer('layers_tbl');
    // $this->body['admin_layer']=$layers;
    //
    // //var_dump($this->body['admin_layer']);
    // foreach($layers as $l){
    //
    //
    //   $tbl[]=$l['layer_table'];
    // }
    // // $tbl=array(
    // //            'waterways_changu',
    // //            'mun_changu',
    // //            'wards_changu',
    // //            'road_changu',
    //
    //
    // //);
    // //var_dump($tbl);
    //
    // $array_geojson = array();
    //
    // for($i=0; $i<sizeof($tbl); $i++){
    //
    //   $get_map=$this->Map_model->get($tbl[$i]);
    //   //var_dump($get_map);$
    //   //$fields=$this->db->list_fields($tbl[$i]);
    //   if (isset($features)){
    //
    //     $features = array();
    //   }
    //   foreach ($get_map as $data) {
    //
    //
    //
    //     $ddata=$data ;
    //     unset($data['st_asgeojson']);
    //     //var_dump($data);
    //
    //     $features[]= array(
    //       "type" =>"Feature",
    //       "properties"=>$data,
    //       "geometry"=>json_decode($ddata['st_asgeojson'],JSON_NUMERIC_CHECK),
    //     );
    //
    //   }
    //
    //   $a = $tbl[$i];
    //
    //   $$a  = array(
    //     'type' => 'FeatureCollection',
    //     'features' => $features,
    //   );
    //
    //
    //
    //   // var_dump(json_encode($data, JSON_NUMERIC_CHECK));
    //   // echo("VR");
    //
    //   array_push($array_geojson , $$a);
    //
    //
    // }






    //$this->body['layer_name']= json_encode($tbl, JSON_NUMERIC_CHECK);
    //$this->body['geo']= json_encode($array_geojson, JSON_NUMERIC_CHECK);


    // layer --ends

    //category layer start


    // $this->body['nep']=json_encode($this->Map_model->get_nep('tbl_lang','school')); nep
    //
    // $fields=$this->db->list_fields('school');
    // unset($fields[0]);
    // $this->body['field']=$fields; nep

    $cat_tbl=$this->Map_model->get_layer('categories_tbl');
    $this->body['category_name']=$cat_tbl;
    $popup = array();
    $style = array();
    $marker_type = array();
    foreach($cat_tbl as $tbl){


      $cat_tbles[]=$tbl['category_table'];
      //$popup[]=$tbl['popup_content'];
      array_push($popup, trim(trim(json_encode($tbl['popup_content'],JSON_NUMERIC_CHECK),'"['),']"'));
      array_push($style, trim(trim(json_encode($tbl['style'],JSON_NUMERIC_CHECK),'"['),']"'));
      array_push($marker_type, trim(trim(json_encode($tbl['marker_type'],JSON_NUMERIC_CHECK),'"['),']"'));

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



    $this->body['default_load']=json_encode($this->Map_model->default_load(),JSON_NUMERIC_CHECK);


    $this->body['cat_map_layer']= json_encode($category_data, JSON_NUMERIC_CHECK);
    $this->body['category_tbl']= json_encode($cat_tbles, JSON_NUMERIC_CHECK);
    $this->body['popup_content']= json_encode($popup, JSON_NUMERIC_CHECK);
    $this->body['style']= json_encode($style, JSON_NUMERIC_CHECK);
    $this->body['marker_type']= json_encode($marker_type, JSON_NUMERIC_CHECK);
    //var_dump($this->body['style']);

    $this->body['data']=$this->Dash_model->get_tables_data('categories_tbl');

    //views add
    $count=$this->Report_model->get_count_views('map');

    $add_count=$count['views_count']+1;

    $data=array(
    'views_count'=>$add_count,

    );


  $this->Report_model->update_views($count['id'],$data);

  //views add end

    $this->load->view('header');
    $this->load->view('category.php',$this->body);
    $this->load->view('footer');



  }

  public function get_summary_list(){
    $tbl=$_GET['selected_list_id'];
    //$tbl='household_data';


    $list=$this->Map_model->get_summary_list($tbl);
    //$this->Map_model->get_summary_data($tbl);
    $f_d=$list['summary_list'];
    $summary=$list['summary'];
    //db
    $this->db->from($tbl);
    $query = $this->db->get();
    $rowcount = $query->num_rows();

    //db


    $summary_list=$this->Map_model->get_summary($f_d,$tbl);

    $summary_div=array(
      'rowcount'=>$rowcount,
      'summary'=>$summary,
      'summary_list'=>$summary_list

    );


    echo(json_encode($summary_div));

  }


  public function manage_popup(){


    if(isset($_POST['submit'])){
      $table=$_POST['table'];
      unset($_POST['submit']);
      unset($_POST['table']);


      //var_dump($_POST);
      //echo $table;
      //exit();
      $aa=array();
      foreach($_POST as $row) {

        //var_dump(json_encode($row));
        //array design
        $a=array(
          'col'=> $row[0],
          'name'=>$row[1]
        );
        array_push($aa,$a);

      }
      $ab['a']=$aa;
      $data= array(

        'popup_content'=>json_encode($ab),
      );
      $this->Map_model->update_popup($table,$data);

      $this->session->set_flashdata('msg',$table.' Popup was successfully updated');

      redirect('categories_tbl');
      //end
    }else{

      $tbl=$_GET['tbl'];
      //echo $tbl ;
      //exit();
      $this->body['tbl_name']=$this->Map_model->get_layer('categories_tbl');
      $this->body['popup']=$this->Map_model->get_popup($tbl);
      $this->body['table']=$tbl;

      $this->load->view('admin/header');
      $this->load->view('maplabel',$this->body);
      $this->load->view('admin/footer');
    }
  }





  public function getcolumnss() {  //show edit label page

    $tablename=$_GET['tbl'];



    $result =  $fields=$this->db->list_fields($tablename);

    $checked1 = $this->Map_model->get_checkedcolumns($tablename);
    $col_name = $this->Map_model->col_name($tablename);
    $checked2=$checked1['popup_content'];

    $checked=json_decode($checked2,TRUE);
    //($checked1);
    //var_dump($col_name);


    $checked_column_array=array();
    //var_dump($checked);

    if($checked != NULL){
      foreach ($checked as $key) {

        //var_dump($key);

        foreach($key as $key1 => $value){


          array_push($checked_column_array,$value['col']);
        }
      }
    }

    $html="";


    for ($i=0;$i<sizeof($col_name);$i++) {
      $checked="";
      for($j=0;$j<sizeof($checked_column_array);$j++)
      {

        if($checked_column_array[$j]== $col_name[$i]['eng_lang']){//check if the checkbox should be checked

          $checked = "checked";
          break;


        }else{
          //$html=$html.'<input type = "checkbox" >'.$result[$i].'</input>';
          $checked = "";


        }
      }

      $html=$html.'<input type="checkbox" name='.$col_name[$i]["eng_lang"].'[] value='.$col_name[$i]["eng_lang"].' id = "ch'.$col_name[$i]["id"].'" class= "chbox" '.$checked.'/>'.$col_name[$i]["nepali_lang"].'<br>'.
      '<input type="checkbox" name='.$col_name[$i]["eng_lang"].'[] value="'.$col_name[$i]["nepali_lang"].'" class="ch'.$col_name[$i]["id"].'"   hidden '.$checked.'><br>';






    }
    echo $html;



  }


  public function manage_style(){

      $tbl=$_GET['tbl'];

    if(isset($_POST['submit'])){
      unset($_POST['submit']);


      $style=json_encode($_POST);

      // var_dump($style);
      // echo $tbl;

         $data=array(

           'style'=>$style,


         );

        $this->Map_model->update_style($tbl,$data);



        $this->session->set_flashdata('msg',$tbl.' Style was successfully updated');

        redirect('categories_tbl');



   }else{







    $data=$this->Dash_model->get_tbl_type($tbl);
    $map_data_type=json_decode($data['st_asgeojson'],TRUE)['type'];

    if($map_data_type=='Point'){

      $this->body['tbl']=$tbl;

      $this->load->view('admin/header');
      $this->load->view('admin/choose_style',$this->body);
      $this->load->view('admin/footer');

    }else{



      $data=$this->Map_model->get_summary_list($tbl);

      $style_array=json_decode($data['style'],TRUE);

      $this->body['style_array']=$style_array;


      $this->load->view('admin/header');
      $this->load->view('admin/manage_style',$this->body);
      $this->load->view('admin/footer');

    }


}
  }

  // public function manage_style(){
  //
  //   $tbl=$_GET['tbl'];
  //
  //   if(isset($_POST['submit'])){
  //     unset($_POST['submit']);
  //
  //
  //     $style=json_encode($_POST);
  //
  //     $data=array(
  //
  //       'style'=>$style,
  //
  //
  //     );
  //
  //     $this->Map_model->update_style($tbl,$data);
  //
  //
  //
  //     $this->session->set_flashdata('msg',$tbl.' Style was successfully updated');
  //
  //     redirect('categories_tbl');
  //
  //
  //
  //   }else{
  //     $data=$this->Map_model->get_summary_list($tbl);
  //
  //     $style_array=json_decode($data['style'],TRUE);
  //
  //     $this->body['style_array']=$style_array;
  //     $this->body['tbl']=$tbl;
  //
  //     $this->load->view('admin/header');
  //     $this->load->view('admin/choose_style',$this->body);
  //     $this->load->view('admin/footer');
  //
  //   }
  //
  // }

public function circle_marker(){

  $tbl=$_GET['tbl'];

  if(isset($_POST['submit'])){
    unset($_POST['submit']);


    $style=json_encode($_POST);

    $data=array(

      'style'=>$style,



    );

    $this->Map_model->update_style($tbl,$data);



    $this->session->set_flashdata('msg',$tbl.' Style was successfully updated');

    redirect('categories_tbl');



  }else{
    $data=$this->Map_model->get_summary_list($tbl);

    $style_array=json_decode($data['style'],TRUE);

    $this->body['style_array']=$style_array;
    $this->body['tbl']=$tbl;

    $this->load->view('admin/header');
    $this->load->view('admin/circle_manage',$this->body);
    $this->load->view('admin/footer');

  }

}

public function location_marker(){

  $tbl=$_GET['tbl'];

  if(isset($_POST['submit'])){
    unset($_POST['submit']);

  var_dump($_POST);
  var_dump($_FILES['cat_pic']['name']);

    if( $_FILES['cat_pic']['name']==''){

      $style=json_encode($_POST);

      $data=array(

        'style'=>$style,
      'marker_type'=>'icon',


      );

      $this->Map_model->update_style($tbl,$data);



      $this->session->set_flashdata('msg',$tbl.' Style was successfully updated');

      redirect('categories_tbl');



    }else{

      $file_name = $_FILES['cat_pic']['name'];

      $ext = pathinfo($file_name, PATHINFO_EXTENSION);

      $img_upload=$this->Dash_model->do_upload_marker($file_name,$tbl);

      if($img_upload==1){

        $image_path=base_url() . 'uploads/icons/map/'.$tbl.'.'.$ext ;

       $st=array(
     'icon'=>$image_path,

       );

      $style=json_encode($st);

        $data=array(
          'style'=>$style,
          'marker_type'=>'icon',
        );


   $this->Map_model->update_style($tbl,$data);

   $this->session->set_flashdata('msg',$tbl.' Style was successfully updated');

   redirect('categories_tbl');


      }else{

        $code= strip_tags($img_upload['error']);



        $this->session->set_flashdata('msg', $code);



        redirect('categories_tbl');

      }



    }




  }else{

    $data=$this->Map_model->get_summary_list($tbl);

    $style_array=json_decode($data['style'],TRUE);

    $this->body['style_array']=$style_array;
    $this->body['tbl']=$tbl;

    $this->load->view('admin/header');
    $this->load->view('admin/choose_icon',$this->body);
    $this->load->view('admin/footer');

  }



}



  public function update_default(){



    $data=array(
      'default_load'=>$this->input->get('value'),

    );
    $this->Map_model->update_value($this->input->get('id'),$data);

  }

  public function update_summary(){

    $tbl=$_GET['tbl'];
    //  $tbl='popup';


    if(isset($_POST['submit'])){


      //var_dump($_POST);
      $data=array(
        'summary_list'=>$_POST['summary'],

      );
      $ddata=array(
        'summary'=>$_POST['summary_data'],

      );
      $this->Map_model->update_popup($tbl,$data);
      $this->Map_model->update_popup($tbl,$ddata);
      $this->session->set_flashdata('msg',$tbl.' Summary was successfully updated');

      redirect('categories_tbl');

    }else{


      $this->body['summary']=$this->Map_model->get_popup($tbl);
      $summary_single=$this->Map_model->get_summary_single($tbl);
      $this->body['selected']=$summary_single;


      $this->load->view('admin/header');
      $this->load->view('admin/summary',$this->body);
      $this->load->view('admin/footer');

    }
  }




  public function test(){
    $list=$this->Map_model->get_summary_list('household_data');
    //$this->Map_model->get_summary_data('household_data');
    $f_d=$list['summary_list'];
    $summary=$list['summary'];
    var_dump($summary);
    //db
    $this->db->from('household_data');
    $query = $this->db->get();
    $rowcount = $query->num_rows();
    echo $rowcount;


  }

public function get_sub_cat_data(){

$tbl= $this->input->get('tbl');
$data=$this->input->get('data');
$col=$this->input->get('col');

$get=$this->Dash_model->get_sub_cat_data($tbl,$data,$col);
$get_style=$this->Dash_model->get_sub_cat_style($tbl);

foreach($get as $cat_data){

  $cat_ddata=$cat_data ;
  unset($cat_data['st_asgeojson']);

  $features_cat[]= array(
    'type' =>'Feature',
    'properties'=>$cat_data,
    'geometry'=>json_decode($cat_ddata['st_asgeojson'],JSON_NUMERIC_CHECK)

  );


}



$sub_category= array(
  'type' => 'FeatureCollection',
  'features' => $features_cat,
);

//echo(json_encode($sub_category));

$response['geojson']=json_encode($sub_category);
$response['style']=$get_style['style'];
echo json_encode($response);

}



}//end
