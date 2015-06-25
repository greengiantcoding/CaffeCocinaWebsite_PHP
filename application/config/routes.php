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
|	http://codeigniter.com/user_guide/general/routing.html
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

/* Navigation Routes */
$route['default_controller'] = 'navigate';
$route['home'] = 'navigate/index';
$route['ourstory'] = 'navigate/ourstory';
$route['events'] = 'navigate/events';
$route['contact'] = 'navigate/contact';
$route['merchandise'] ='navigate/merchandise';
$route['catering'] = 'navigate/catering';
$route['review'] = 'navigate/review';
$route['photo_album'] ='navigate/photo_album';
$route['menu'] = 'navigate/menu';

/* Admin Routes */
$route['login'] = 'admin/index';
$route['add_photo'] = 'admin/add_photo';
$route['delete_photo'] = 'admin/delete_photo';
$route['admin_menus'] = 'admin/admin_menus';
$route['admin_dashboard'] = 'admin/admin_dashboard';

/* Admin Menu Routes */
$route['new_treat'] = 'admin/new_treat';
$route['new_specialty'] = 'admin/new_specialty';
$route['new_hot_drink'] = 'admin/new_hot_drink';
$route['new_breakfast'] = 'admin/new_breakfast';
$route['new_salad'] = 'admin/new_salad';
$route['new_soup'] = 'admin/new_soup';
$route['new_burger'] = 'admin/new_burger';
$route['new_sandwich_fixing'] = 'admin/new_sandwich_fixing';
$route['new_kid'] = 'admin/new_kid';

/* Application Routes */
$route['review/new'] = 'admin/review';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


