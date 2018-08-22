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
    $this->load->model('Main_model');
  }

  public function data_map(){


$tbl=$this->input->get('tbl');

//echo $tbl;
 $d=$this->Map_model->get_lang_map_data($tbl);

$this->body['data']=$this->Map_model->get_as_map_data($d,$tbl);
   $this->data['site_info']=$this->Report_model->site_setting();
//var_dump($this->body['data']);
//
//language
if($this->session->userdata('Language')==NULL){

  $this->session->set_userdata('Language','nep');
}

$lang=$this->session->get_userdata('Language');


if($lang['Language']=='en'){

  $this->body['site_info']=$this->Main_model->site_setting_en();

}else{

 $this->body['site_info']=$this->Main_model->site_setting_nep();


}
$tokens = explode('/', $_SERVER['REQUEST_URI']);
   $urly=$tokens[sizeof($tokens)-1];
$this->body['urll']=$urly;
//language

$name=str_replace("_"," ",$tbl);

$this->body['name']=ucwords($name);

  $this->load->view('header',$this->body);
  $this->load->view('data_map',$this->body);
  $this->load->view('footer',$this->data);


  }

public function map_download()
{

 $this->body['data']=$this->Map_model->get_map_download_data();
 //language
 if($this->session->userdata('Language')==NULL){

   $this->session->set_userdata('Language','nep');
 }

 $lang=$this->session->get_userdata('Language');


 if($lang['Language']=='en'){

   $this->body['site_info']=$this->Main_model->site_setting_en();

 }else{

  $this->body['site_info']=$this->Main_model->site_setting_nep();


 }
$this->body['urll']=$this->uri->segment(1);
 //language

  $this->load->view('header',$this->body);
  $this->load->view('map_download',$this->body);
  $this->load->view('footer',$this->body);

}


public function  admin_category_map(){


  $cat_tbl=$this->Map_model->get_layer('categories_tbl');

  $this->body['category_name']=$cat_tbl;
  $popup = array();
  $style = array();
  $marker_type = array();
  foreach($cat_tbl as $tbl){

if(!$this->db->table_exists($tbl['category_table'])){

}else{
    $cat_tbles[]=$tbl['category_table'];
    //$popup[]=$tbl['popup_content'];
    array_push($popup, trim(trim(json_encode($tbl['popup_content'],JSON_NUMERIC_CHECK),'"['),']"'));
    array_push($style, trim(trim(json_encode($tbl['style'],JSON_NUMERIC_CHECK),'"['),']"'));
    array_push($marker_type, trim(trim(json_encode($tbl['marker_type'],JSON_NUMERIC_CHECK),'"['),']"'));
}
  }


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
  $count_dataset=$this->Dash_model->get_count_views_datasets($this->input->get('tbl'));
  //var_dump($count_dataset);
  $count=$this->Report_model->get_count_views('map');

  $add_count=$count['views_count']+1;
  $add_count_dataset=$count_dataset['views']+1;

  $data=array(
  'views_count'=>$add_count,

  );

  $data_dataset=array(
  'views'=>$add_count_dataset,

  );


$this->Report_model->update_views($count['id'],$data);
$this->Dash_model->cat_update($count_dataset['id'],$data_dataset);
$def_select=$this->Dash_model->get_default_cat_data('categories_tbl');
$this->body['default_selected_cat_tbl']=$def_select['category_table'];

//language

if($this->session->userdata('Language')==NULL){

  $this->session->set_userdata('Language','nep');
}

$lang=$this->session->get_userdata('Language');


if($lang['Language']=='en'){

  $this->body['site_info']=$this->Main_model->site_setting_en();

}else{

 $this->body['site_info']=$this->Main_model->site_setting_nep();


}
$tokens = explode('/', $_SERVER['REQUEST_URI']);
  $urly=$tokens[sizeof($tokens)-1];
$this->body['urll']=$urly;
//language

 $this->body['map_zoom_center']=$this->Report_model->site_setting();

 //views add end
//  exit();

   $this->load->view('header',$this->body);
  $this->load->view('admin_category.php',$this->body);
  $this->load->view('footer',$this->body);



}




  public function  category_map(){


    $cat_tbl=$this->Map_model->get_layer('categories_tbl');

    $this->body['category_name']=$cat_tbl;
    $popup = array();
    $style = array();
    $marker_type = array();
    foreach($cat_tbl as $tbl){

if(!$this->db->table_exists($tbl['category_table'])){

}elseif($tbl['public_view']=='0'){


}else{
      $cat_tbles[]=$tbl['category_table'];
      //$popup[]=$tbl['popup_content'];
      array_push($popup, trim(trim(json_encode($tbl['popup_content'],JSON_NUMERIC_CHECK),'"['),']"'));
      array_push($style, trim(trim(json_encode($tbl['style'],JSON_NUMERIC_CHECK),'"['),']"'));
      array_push($marker_type, trim(trim(json_encode($tbl['marker_type'],JSON_NUMERIC_CHECK),'"['),']"'));
}
    }


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
      //echo addslashes(json_encode($features_cat));
      //exit();

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
    $count_dataset=$this->Dash_model->get_count_views_datasets($this->input->get('tbl'));
    //var_dump($count_dataset);
    $count=$this->Report_model->get_count_views('map');

    $add_count=$count['views_count']+1;
    $add_count_dataset=$count_dataset['views']+1;

    $data=array(
    'views_count'=>$add_count,

    );

    $data_dataset=array(
    'views'=>$add_count_dataset,

    );


  $this->Report_model->update_views($count['id'],$data);
  $this->Dash_model->cat_update($count_dataset['id'],$data_dataset);
  $def_select=$this->Dash_model->get_default_cat_data('categories_tbl');
  $this->body['default_selected_cat_tbl']=$def_select['category_table'];

 //language

 if($this->session->userdata('Language')==NULL){

   $this->session->set_userdata('Language','nep');
 }

 $lang=$this->session->get_userdata('Language');


 if($lang['Language']=='en'){

   $this->body['site_info']=$this->Main_model->site_setting_en();

 }else{

  $this->body['site_info']=$this->Main_model->site_setting_nep();


 }
$tokens = explode('/', $_SERVER['REQUEST_URI']);
   $urly=$tokens[sizeof($tokens)-1];
$this->body['urll']=$urly;
//language

  $this->body['map_zoom_center']=$this->Report_model->site_setting();

  //views add end
//  exit();

    $this->load->view('header',$this->body);
    $this->load->view('category.php',$this->body);
    $this->load->view('footer',$this->body);



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

      redirect('manage_popup?tbl='.$table);
      //end
    }else{

      $tbl=$_GET['tbl'];
      //echo $tbl ;
      //exit();
      $this->body['tbl_name']=$this->Map_model->get_layer('categories_tbl');
      $this->body['popup']=$this->Map_model->get_popup($tbl);
      $this->body['table']=$tbl;

      //admin check
      $admin_type=$this->session->userdata('user_type');

      $this->body['admin']=$admin_type;
      if($this->session->userdata('user_type')=='1'){

        $this->body['disable']="";

      }else{

     $this->body['disable']="disabled";

      }

      //admin check

      $this->load->view('admin/header',$this->body);
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

        redirect('manage_style?tbl='.$tbl);



   }else{







    $data=$this->Dash_model->get_tbl_type($tbl);

    $map_data_type=json_decode($data['st_asgeojson'],TRUE)['type'];



    if($map_data_type=='Point' || $map_data_type=='point' || $map_data_type=='node'){
    //if($map_data_type=='Point' ){

      $this->body['tbl']=$tbl;

      //admin check
      $admin_type=$this->session->userdata('user_type');

      $this->body['admin']=$admin_type;
      if($this->session->userdata('user_type')=='1'){

        $this->body['disable']="";

      }else{

     $this->body['disable']="disabled";

      }

      //admin check

      $this->load->view('admin/header',$this->body);
      $this->load->view('admin/choose_style',$this->body);
      $this->load->view('admin/footer');

    }else{



      $data=$this->Map_model->get_summary_list($tbl);

      $style_array=json_decode($data['style'],TRUE);

      $this->body['style_array']=$style_array;
      $this->body['table']=$tbl;

      //admin check
      $admin_type=$this->session->userdata('user_type');

      $this->body['admin']=$admin_type;
      if($this->session->userdata('user_type')=='1'){

        $this->body['disable']="";

      }else{

     $this->body['disable']="disabled";

      }

      //admin check

      $this->load->view('admin/header',$this->body);
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
    echo $style ;
    //exit();

    $data=array(

      'style'=>$style,
      'marker_type'=>NULL,



    );

    $this->Map_model->update_style($tbl,$data);



    $this->session->set_flashdata('msg',$tbl.' Style was successfully updated');

    redirect('circle_marker?tbl='.$tbl);



  }else{
    $data=$this->Map_model->get_summary_list($tbl);

    $style_array=json_decode($data['style'],TRUE);

    $this->body['style_array']=$style_array;
    $this->body['tbl']=$tbl;

    //admin check
    $admin_type=$this->session->userdata('user_type');

    $this->body['admin']=$admin_type;
    if($this->session->userdata('user_type')=='1'){

      $this->body['disable']="";

    }else{

   $this->body['disable']="disabled";

    }

    //admin check

    $this->load->view('admin/header',$this->body);
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

      $_POST['opacity']="0";
      $_POST['fillOpacity']="0";
      $_POST['weight']="0";
      $_POST['radius']="0";
      $_POST['color']="0";
      $_POST['fillColor']="0";
      $style=json_encode($_POST);



      $data=array(

        'style'=>$style,
      'marker_type'=>'icon',


      );

      $this->Map_model->update_style($tbl,$data);



      $this->session->set_flashdata('msg',$tbl.' Style was successfully updated');

      redirect('location_marker?tbl='.$tbl);



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

     redirect('location_marker?tbl='.$tbl);


      }else{

        $code= strip_tags($img_upload['error']);



        $this->session->set_flashdata('msg', $code);



          redirect('location_marker?tbl='.$tbl);

      }



    }




  }else{

    $data=$this->Map_model->get_summary_list($tbl);

    $style_array=json_decode($data['style'],TRUE);

    $this->body['style_array']=$style_array;
    $this->body['tbl']=$tbl;
    $this->body['icons']=$this->Map_model->get_icon();

    //admin check
    $admin_type=$this->session->userdata('user_type');

    $this->body['admin']=$admin_type;
    if($this->session->userdata('user_type')=='1'){

      $this->body['disable']="";

    }else{

   $this->body['disable']="disabled";

    }

    //admin check

    $this->load->view('admin/header',$this->body);
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
  public function update_public_view(){



    $data=array(
      'public_view'=>$this->input->get('value'),

    );
    $this->Map_model->update_value($this->input->get('id'),$data);

  }


  public function update_summary(){

    $tbl=$_GET['tbl'];
    //  $tbl='popup';


    if(isset($_POST['submit'])){


      // var_dump($_POST);
      // exit();
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

      $this->body['name_summary']=ucwords(str_replace("_"," ",$tbl));
      $this->body['summary']=$this->Map_model->get_popup($tbl);
      $summary_single=$this->Map_model->get_summary_single($tbl);
      $this->body['selected']=$summary_single;


      //admin check
      $admin_type=$this->session->userdata('user_type');

      $this->body['admin']=$admin_type;
      if($this->session->userdata('user_type')=='1'){

        $this->body['disable']="";

      }else{

     $this->body['disable']="disabled";

      }

      //admin check

      $this->load->view('admin/header',$this->body);
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
$get_count=$this->Dash_model->get_sub_cat_data_count($tbl,$data,$col);

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
$response['count_data']=$get_count;
$response['style']=$get_style['style'];
$response['marker_type']=$get_style['marker_type'];
$response['popup_content']=$get_style['popup_content'];
echo json_encode($response);

}


public function get_map_filter(){

  $tbl=$this->input->get('tbl');

  $filter=$this->Map_model->get_lang_map_data($tbl);

 echo  json_encode($filter);



}

public function get_map_filter_value(){

  $tbl=$this->input->get('tbl');
  $col=$this->input->get('col');

  $values=$this->Dash_model->get_sub_cat($col,$tbl);

 echo  json_encode($values);

}

public function filter_query()
{
 $tbl=$this->input->get('tbl');

 $filter_qry=$this->input->get('qry');
 // echo $filter_qry;
 //  $tbl='health_facilities';
 //   $filterr_qry ="a0 = '8'";
   //echo $filterr_qry;
    $d=$this->Map_model->get_lang_map_data($tbl);
  $get=$this->Map_model->get_map_filter_data($tbl,$filter_qry,$d);
  $get_map=$this->Dash_model->filter_map_data($tbl,$filter_qry);
  $get_style=$this->Dash_model->get_sub_cat_style($tbl);



  foreach($get_map as $cat_data){

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


  $response['table_name']=$tbl;
  $response['geojson']=json_encode($sub_category);
  $response['style']=$get_style['style'];
  $response['marker_type']=$get_style['marker_type'];
  $response['popup_content']=$get_style['popup_content'];
   $response['table_data']=json_encode($get);
  echo json_encode($response);


}

public function csv_filter_query()
{
array_map('unlink', glob("uploads/map_filter_csv/*.csv"));

 $tbl=$this->input->get('tbl');

 $filter_qry=$this->input->get('qry');
 $s_qry=$this->input->get('s_qry');
  //echo $filter_qry;
 //  $tbl='health_facilities';
 //   $filterr_qry ="a0 = '8'";
   //echo $tbl;
   //exit();
  $d=$this->Map_model->get_lang_map_data($tbl);
  $get=$this->Map_model->get_map_filter_data_csv($tbl,$filter_qry,$d);
  //$get_map=$this->Dash_model->filter_map_data($tbl,$filter_qry);

  $this->load->dbutil();
  $this->load->helper('file');
  $this->load->helper('download');

  $new_report = $this->dbutil->csv_from_result($get);
  $name = $tbl.'.csv';
  /*  Now use it to write file. write_file helper function will do it */
  write_file('uploads/map_filter_csv/'.$name,$new_report);

  $data=file_get_contents('uploads/map_filter_csv/'.$name);
  force_download($name,$data);



//var_dump($get);
}


}//end
