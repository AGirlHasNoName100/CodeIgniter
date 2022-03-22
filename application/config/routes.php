<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['visitor'] = 'users/visitor';
$route['chart'] = "charts";
$route['profiles'] = 'users/profiles';
$route['posts'] = 'posts/trial';
$route['default_controller'] = 'pages/view';
//$route['default_controller'] = 'pages/home';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
