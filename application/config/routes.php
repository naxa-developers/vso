<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'MainController/default_page';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


// user routes
$route['main'] ='MainController/default_page';
$route['datasets'] ='MainController/dataset_page';
$route['about'] ='MainController/about_page';

$route['map'] ='MapController/map_page';
$route['category'] ='MapController/category_map';
$route['manage_popup'] ='MapController/manage_popup';
$route['manage_style'] ='MapController/manage_style';

$route['report_page'] ='ReportController/report_page';


// Admin routes

$route['admin'] = 'Admin/LoginController';

$route['table_create'] = 'Admin/TableController/create_table';
$route['dashboard'] = 'Admin/CategoriesController';
$route['data_tables'] = 'Admin/CategoriesController/data_tables';
//$route['csv_upload'] = 'Admin/CategoriesController/csv_upload';
$route['edit'] = 'Admin/CategoriesController/edit';
$route['create_col'] = 'Admin/CategoriesController/create_col';
$route['create_categories_tbl'] = 'Admin/CategoriesController/create_categories_tbl';
$route['create_categories'] = 'Admin/CategoriesController/create_categories';
$route['view_cat_tables'] = 'Admin/CategoriesController/view_cat_tables';
$route['categories_tbl'] = 'Admin/CategoriesController/categories_tbl';
$route['edit_categories'] = 'Admin/CategoriesController/edit_categories';
$route['drop_cat_table'] = 'Admin/CategoriesController/drop_cat_table';
$route['delete_data'] = 'Admin/CategoriesController/delete_data';
$route['csv_data_tbl'] = 'Admin/CategoriesController/csv_data_tbl';

$route['proj/delete_data'] = 'Admin/ProjectController/delete_data';
$route['proj/edit_proj'] = 'Admin/ProjectController/edit_proj';
$route['add_proj'] = 'Admin/ProjectController/add_proj';
$route['view_proj'] = 'Admin/ProjectController/view_proj';

$route['csv_upload'] = 'Admin/TableController/copy_table';
$route['csv_tbl'] = 'Admin/TableController/csv_tbl';

$route['add_layers'] = 'Admin/LayersController/add_layers';
$route['layers_view'] = 'Admin/LayersController/layers_view';
$route['layers_detail'] = 'Admin/LayersController/layers_detail';
$route['layers_edit'] = 'Admin/LayersController/layers_edit';


$route['background'] = 'Admin/UploadController/bck_img';
$route['emergency_contact'] = 'Admin/UploadController/emergency_contact';
$route['delete_emergency'] = 'Admin/UploadController/delete_emerg';
$route['edit_emergency'] = 'Admin/UploadController/edit_emerg';
$route['add_emergency'] = 'Admin/UploadController/add_emergency';
