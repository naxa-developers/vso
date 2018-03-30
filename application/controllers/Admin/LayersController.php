<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LayersController extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
  }






public function add_layers(){

//echo APPPATH;
$this->load->view("admin/header");
$this->load->view("admin/layers_upload");
$this->load->view("admin/footer");


$UPLOAD_SCHEMA = "shapefile";

//code
if(@$_POST["proj"]){

  $UPLOAD_SCHEMA = $_POST['f_name'];


  //Creando la carpeta temporal para descomprimir el archivo
  $tempdir=tempnam(sys_get_temp_dir(),'');
  if (file_exists($tempdir)) { unlink($tempdir); }
  mkdir($tempdir);
  if (!is_dir($tempdir)) {
    echo 'error when creating the temporary folder';
    exit;
  }

  //Descomprimiendo archivo
  $zip = new ZipArchive();
  $source_file = $_FILES["uploadedfile"]["tmp_name"];

  // open the zip file to extract
  if ($zip->open($source_file) !== true) {
    echo "Unable to unzip the file $source_file";
    exit;
  }

  // place in the temp folder
  if ($zip->extractTo($tempdir) !== true) {
    $zip->close();
    echo "The files could not be extracted to the folder $tempdir";
    exit;
  }
  $zip->close();

  //verificar si contiene los archivos basicos para leer shapefile: Shape (.shp),dBase (.dbf)
  $shapefile = glob($tempdir . "/*.shp");
  if(!$shapefile){
    echo "No .shp file found";
    exit;
  }
  if(count($shapefile) > 1){ //verificando que el archivo empaquetado no contenga mas de un shape.
    echo "The packaged file contains more than 1 shape.";
    exit;
  }
  $dbffile = substr($shapefile[0], 0, -3).'dbf';
  if (!(is_readable($dbffile) && is_file($dbffile))){
    echo "The .dbf file is missing";
    exit;
  }

  //leyendo el encabezado del archivo shapefile
  require_once(APPPATH."shpparser/shpparser.php");
  $shp = new shpParser();
  $shp->load($shapefile[0]);

  //verificando el sistema de proyeccion
  $bbox = $shp->headerInfo()["boundingBox"];
  $xc = $bbox["xmin"] + ($bbox["xmax"] - $bbox["xmin"]);
  $yc = $bbox["ymin"] + ($bbox["ymax"] - $bbox["ymin"]);
  $bboxProj = array();
  if($_POST["proj"] == 4326){
    $bboxProj = array("xmin" => -180, "ymin" => -90, "xmax" => 180, "ymax" => 90);
  } else {
    $bboxProj = array("xmin" => 166021.4431, "ymin" => 1116915.0440, "xmax" => 833978.5569, "ymax" => 10000000.0000);
  }

  if($bboxProj["xmin"] > $xc || $xc > $bboxProj["xmax"] || $bboxProj["ymin"] > $yc || $yc > $bboxProj["ymax"]){
    echo "The coordinates do not correspond to the reference projection system.";
    exit;
  }

  //Generando un nombre aleatorio para la nueva tabla de PostgreSQL.
  $bytes = openssl_random_pseudo_bytes(4, $cstrong);
  $hex   = str_shuffle("abcdefg").bin2hex($bytes);
  $tablename = "f".date('Ymd').($hex); //the name of a table in postgresql must start with carater, the letter f refers to 'feature'

  //creando el comando para generar el archivo SQL
  $command = "shp2pgsql -s ".$_POST["proj"]." -g the_geom -I -W \"latin1\" ".$shapefile[0]." ".$UPLOAD_SCHEMA." > ".$tempdir."/".$tablename.".sql";
  echo $command;

  //Ejecutando el comando
  //En windows : Previamente se debe adicionar la ruta del archivo de comando shp2pgsql.exe a la variable "Path" del entorno del sistema.
  exec($command,$out,$ret);
  //Ejecutando en la Geodatabase el archivo SQL
  //Se debe tener activa la extension de PHP para conectarse a postgresql


  $filename = $tempdir."/".$tablename.".sql";


  $handle = fopen($filename, "r");

  	$query = fread($handle, filesize($filename));

    if (!$query) {
      echo "The table $tablename could not be created in the DB.";
    }else{

    echo "The table $UPLOAD_SCHEMA. $tablename was created successfully!";
  }








}
//code






}







}//main
