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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['email'] = 'controller_email';
$route['email/compose'] = 'controller_email/compose';
$route['email/sent'] = 'controller_email/sent';
$route['email/process'] = 'controller_email/process';
$route['email/read/(:num)'] = 'controller_email/read/$1';
$route['email/reply/(:num)'] = 'controller_email/reply/$1';
$route['email/read_sent/(:num)'] = 'controller_email/read_sent/$1';

$route['profile'] = 'controller_profile';
$route['profile_organization'] = 'controller_profile';
$route['profile_organization_edit/(:num)'] = 'controller_profile/index/$1';

$route['akun'] = 'bimbel_user/account';
$route['akun/edit/(:num)'] = 'bimbel_user/account_edit/$1';
$route['akun/editts/(:any)'] = 'bimbel_user/account_edit_ts/$1';
$route['akun/editts'] = 'bimbel_user/account_edit_ts';
$route['akun/process'] = 'bimbel_user/account_process';
$route['akun/processts'] = 'bimbel_user/account_process_ts';
//owner
$route['subject_to_approve'] = 'controller_owner/subject_to_approve';
$route['subject_to_approve_edit/(:num)'] = 'controller_owner/subject_to_approve_edit/$1';
$route['subject_ongoing'] = 'controller_owner/subject_ongoing';
$route['history_subject'] = 'controller_owner/history_subject';
//tutor
$route['semua_organisasi'] = 'controller_tutor/semua_organisasi';
$route['semua_organisasi/detail/(:num)'] = 'controller_tutor/semua_organisasi_detail/$1';
$route['bimbel_yang_sedang_terdaftar'] = 'controller_tutor/bimbel_yang_sedang_terdaftar';
$route['bimbel_yang_sedang_diajar'] = 'controller_tutor/bimbel_yang_sedang_diajar';
//siswa
$route['semua_bimbel'] = 'controller_siswa/semua_bimbel';
$route['semua_bimbel/detail/(:num)'] = 'controller_siswa/semua_bimbel_detail/$1';
$route['bimbel_yang_di_ikuti'] = 'controller_siswa/bimbel_yang_di_ikuti';

