<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'admin';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['login'] = 'admin/login';

$route['registerDistrict'] = 'admin/registerDistrict';
$route['registerBlock'] = 'admin/registerBlock';
$route['registerJawan'] = 'admin/registerJawan';
$route['authenticate'] = 'admin/authenticate';
$route['signin'] = 'admin/signin';
$route['logout'] = 'admin/logout';

$route['district/create'] = 'admin/addDistrict';
$route['block/create'] = 'admin/addBlock';
$route['district/view'] = 'admin/viewDistrict';
$route['block/view'] = 'admin/viewBlock';
$route['jawan/create'] = 'admin/addJawan';
$route['jawan/view'] = 'admin/viewJawan';

$route['districts']['GET'] = 'admin/districts';
$route['districts/(:num)']['GET'] = 'admin/districts/$1';
$route['deleteDistrict/(:num)'] = 'admin/deleteDistrict/$1';
$route['editDistrict/(:num)']['GET'] = 'admin/editDistrict/$1';
$route['updateDistrict/(:num)'] = 'admin/updateDistrict/$1';

$route['blocks']['GET'] = 'admin/blocks';
$route['blocks/(:num)']['GET'] = 'admin/blocks/$1';
$route['deleteBlock/(:num)'] = 'admin/deleteBlock/$1';
$route['editBlock/(:num)']['GET'] = 'admin/editBlock/$1';
$route['updateBlock/(:num)'] = 'admin/updateBlock/$1';

$route['jawans']['GET'] = 'admin/jawans';
$route['jawans/(:num)']['GET'] = 'admin/jawans/$1';
$route['deleteJawan/(:num)'] = 'admin/deleteJawan/$1';
$route['editJawan/(:num)']['GET'] = 'admin/editJawan/$1';
$route['updateJawan/(:num)'] = 'admin/updateJawan/$1';

$route['district/jawanDetails'] = 'district/jawanDetails';
$route['district/getJawansByBlock/(:num)'] = 'district/getJawansByBlock/$1';
$route['district/getJawansByDistrict/(:num)'] = 'district/getJawansByDistrict/$1';

$route['block/jawanDetails'] = 'block/jawanDetails';
$route['block/getJawansByBlocks/(:num)'] = 'block/getJawansByBlocks/$1';


