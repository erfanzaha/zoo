<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = 'NotFound';
$route['translate_uri_dashes'] = FALSE;


//==================================== authorization ====================================
//logout 
$route['logout']                    = 'auth/logout';
//login
$route['login']                     = 'auth/login';
$route['proses-login']              = 'auth/login/proses';
//forgot password
$route['forgot-password']           = 'auth/forgotPassword';
$route['proses-forgot-password']    = 'auth/forgotPassword/proses';
//reset password 
$route['reset-password']            = 'auth/resetPassword';
$route['proses-reset-password']     = 'auth/resetPassword/proses';
//register
$route['register']                  = 'auth/register';
$route['proses-register']           = 'auth/register/proses';
//==================================== end authorization ===============================
/**
 * 
 */
//==================================== regional ====================================
$route['regional/province']         = 'regional/province/viewProvince';
$route['regional/cities/(:any)']    = 'regional/cities/viewCities/$1';
$route['regional/district/(:any)']  = 'regional/district/viewDistrict/$1';
$route['regional/village/(:any)']   = 'regional/village/viewVillage/$1';
//==================================== end regional ================================
/**
 * 
 */
//==================================== member ====================================
$route['member']                    = 'member/province/viewProvince';
//==================================== end member ================================
/**
 * 
 */
//==================================== admin ====================================
//dashboard
$route['admin/dashboard']           = 'admin/dashboard/dashboard';

//administrator
$route['admin/administrator']       = 'admin/administrator/administrator';

//pengelola
$route['admin/pengelola']           = 'admin/pengelola/pengelola';

//petugas
$route['admin/petugas']             = 'admin/petugas/petugas';

//pengunjung
$route['admin/pengunjung']          = 'admin/pengunjung/pengunjung';

//tamam marga satwa
$route['admin/taman-marga-satwa']   = 'admin/taman-marga-satwa/tamanMargaSatwa';

//wahana
$route['admin/wahana']              = 'admin/wahana/wahana';

//kandang
$route['admin/kandang']             = 'admin/kandang/kandang';

//restoran
$route['admin/restoran']            = 'admin/restoran/restoran';

//order
$route['admin/order']               = 'admin/order/order';

//scanned tiket
$route['admin/scanned-tiket']       = 'admin/scanned-tiket/scannedTiket';

//scanned wahana
$route['admin/scanned-wahana']      = 'admin/scanned-wahana/scannedWahana';

//scanned restoran
$route['admin/scanned-restoran']    = 'admin/scanned-restoran/scannedRestoran';

//==================================== end admin ================================

//==================================== User =====================================
//dashboard
$route['dashboard']                 = 'user/dashboard/dashboard';

//==================================== end admin ================================