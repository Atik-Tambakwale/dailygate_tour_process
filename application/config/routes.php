<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//DEFAULT ROUTES
$route['default_controller'] = 'C_Tour_Process';
$route['404_override'] = 'My404';
$route['translate_uri_dashes'] = TRUE;

$route['tutotial/get_videos']='C_Tour_Process/get_totutial_videos';
