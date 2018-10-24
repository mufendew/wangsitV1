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
$route['default_controller'] = 'C_index';
//periode 4
$route['academy'] = 'academy/c_index';
$route['market'] = 'market/c_index';

$route['market/product'] = 'market/c_product';
$route['market/dashboard'] = 'market/c_dashboard';
$route['market/admin'] = 'market/c_admin';
$route['market/admin/addseller'] = 'market/c_admin/addseller';
$route['market/admin/manageseller'] = 'market/c_admin/manageseller';
$route['admin/wassup'] = 'admin/c_wassup';
$route['wassup/post/(:num)'] = function($id) { return 'wassup/c_index/post/'.$id; } ;
$route['forum'] = 'forum/c_index';


//periode 5
$route['login'] = 'Propil/Googlee';
$route['dashboard'] = 'Propil/Profile';
$route['profile/(:any)'] = 'Propil/Googlee';

$route['article'] = 'Article/Article';
$route['article/(:num)'] = 'Article/Article';
$route['article/(:any)'] = 'Article/Article/Kategori/';
$route['article/(:any)/(:num)'] = 'Article/Article/Kategori/';

//wangsit.kbmsi.or.id/artcile/$username
$route['(:any)'] = 'Propil/Profile/Profil_Orang';
$route['(:any)/(:num)'] = 'Propil/Profile/Profil_Orang';

//wangsit.kbmsi.or.id/artcile/$username/$slug
$route['(:any)/(:any)'] = 'Article/Article/Detail/';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
