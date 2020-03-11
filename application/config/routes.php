<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';

$route['language/(:any)'] = 'Language/set/$1';
$route['profile'] = 'Profile';
$route['services'] = 'Services';
$route['gallery'] = 'Gallery';
$route['contact-us']['POST'] = 'Contact/request';
$route['contact-us']['GET'] = 'Contact';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
