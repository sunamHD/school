<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
$route['classes'] = 'classes';
$route['classes/enrollmentSelect'] = 'classes/enrollmentSelect';
$route['classes/enrollmentDetails/(:any)'] = 'classes/enrollmentDetails/$1';
$route['classes/unenroll'] = 'classes/unenroll';
$route['classes/enroll'] = 'classes/enroll';
$route['classes/index'] = 'classes/index';
$route['classes/editMenu'] = 'classes/editMenu';
$route['classes/editDetails/(:any)'] = 'classes/editDetails/$1';
$route['classes/delete'] = 'classes/delete';
$route['classes/create'] = 'classes/create';
$route['students/editMenu'] = 'students/editMenu';
$route['students/editDetails/(:any)'] = 'students/editDetails/$1';
$route['students/index'] = 'students/index';
$route['students/create'] = 'students/create';
$route['students/delete'] = 'students/delete';
$route['students/(:any)'] = 'students/view/$1';
$route['students'] = 'students';
$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/view';

/* End of file routes.php */
/* Location: ./application/config/routes.php */
