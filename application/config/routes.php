<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Frontend_Controller';
$route['admin'] = 'Backend_Controller';
$route['dashboard'] = 'Backend_Controller/dashboard';
$route['logout'] = 'Backend_Controller/logout';
$route['register'] = 'Backend_Controller/register';

$route['dashboard/add-resident'] = 'Backend_Controller/add_resident';
$route['dashboard/view-residents'] = 'Backend_Controller/view_resident';
$route['dashboard/edit-resident/(:num)'] = 'Backend_Controller/edit_resident/$1';
$route['dashboard/delete-resident/(:num)'] = 'Backend_Controller/delete_resident/$1';

$route['dashboard/view-blotter'] = 'Backend_Controller/view_blotter';
$route['dashboard/edit-blotter/(:num)'] = 'Backend_Controller/edit_blotter/$1';
$route['dashboard/delete-blotter/(:num)'] = 'Backend_Controller/delete_blotter/$1';
$route['Backend_Controller/action'] = 'Backend_Controller/action';
$route['dashboard/add-blotter'] = 'Backend_Controller/add_blotter';

$route['dashboard/add-brgyofficial'] = 'Backend_Controller/add_brgyofficial';
$route['dashboard/view-brgyofficial'] = 'Backend_Controller/view_brgyofficial';
$route['dashboard/edit-brgyofficial/(:num)'] = 'Backend_Controller/edit_brgyofficial/$1';
$route['dashboard/delete-brgyofficial/(:num)'] = 'Backend_Controller/delete_brgyofficial/$1';
 /* AJAX  */
 $route['dashboard/ajax-update-blotter-form']['post'] = 'Backend_Controller/ajax_update_blotter_form';
 $route['dashboard/ajax-update-resident-form']['post'] = 'Backend_Controller/ajax_update_resident_form';
 $route['dashboard/ajax-update-brgyofficial-form']['post'] = 'Backend_Controller/ajax_update_brgyofficial_form';


 $route['dashboard/ajax-view-resident-form']['post'] = 'Backend_Controller/ajax_view_resident_form';

 $route['backend_controller/fetch_resident_info/(:any)'] = 'backend_controller/fetch_resident_info/$1';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
