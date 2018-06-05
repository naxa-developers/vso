<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MapDownload extends CI_Controller
 {
   function __construct()
    {
      parent::__construct();


		$this->load->model('Map_model');
        }




public function map_show()
{

$this->body['data']= $this->Map_model->get_map_download_data();

$this->load->view('admin/header');
$this->load->view('admin/publication_tbl',$this->body);
$this->load->view('admin/footer');


}

}
