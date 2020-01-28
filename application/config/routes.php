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

$route['default_controller'] = 'front/home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// ------------ FRONT END ----------
// Berita
$route['berita'] = 'front/blog/index';
$route['berita/kategori/(:any)'] = 'front/blog/kategori/$1';
$route['berita/detail/(:any)'] = 'front/blog/detail/$1';

// // Galeri
// $route['galeri'] = 'front/galeri';

//------------- ADMIN ---------------

$route['admin/login'] = 'login';

// dashboard
$route['admin/dashboard'] = 'dashboard';
$route['admin/logout'] = 'dashboard/logout';

// berita
$route['admin/berita'] = 'berita';
$route['admin/berita/tambah-berita/(:any)'] = 'berita/tambah/$1'; //tambah
$route['admin/berita/simpan'] = 'berita/simpan'; //simpan data
$route['admin/berita/ubah-berita/(:any)'] = 'berita/ubah/$1'; //ubah
$route['admin/berita/detail-berita/(:any)'] = 'berita/detail/$1'; //detail
$route['admin/berita/hapus-berita/(:any)'] = 'berita/delete/$1'; //hapus data
$route['admin/berita/kategori-berita/(:any)'] = 'berita/detail_kat_berita/$1'; //tampil detail kategori data

// siswa
$route['admin/siswa'] = 'siswa';
$route['admin/siswa/tambah-siswa/(:any)'] = 'siswa/tambah/$1'; //tambah
$route['admin/siswa/simpan'] = 'siswa/simpan'; //simpan data
$route['admin/siswa/ubah-siswa/(:any)'] = 'siswa/ubah/$1'; //ubah
$route['admin/siswa/detail-siswa/(:any)'] = 'siswa/detail/$1'; //detail
$route['admin/siswa/hapus-siswa/(:any)'] = 'siswa/delete/$1'; //hapus data
$route['admin/siswa/kategori-siswa/(:any)'] = 'siswa/detail_kat_siswa/$1'; //tampil detail kategori data

// Setting
$route['admin/pengaturan/kemitraan'] = 'kemitraan';
$route['admin/pengaturan/kemitraan/tambah-kemitraan'] = 'kemitraan/tambah';
$route['admin/pengaturan/kemitraan/simpan-kemitraan'] = 'kemitraan/simpan';
$route['admin/pengaturan/kemitraan/ubah-kemitraan/(:num)'] = 'kemitraan/ubah/$1';
$route['admin/pengaturan/kemitraan/hapus-kemitraan/(:num)'] = 'kemitraan/delete/$1';

$route['admin/pengaturan/slider'] = 'slider';
$route['admin/pengaturan/slider/tambah-slider'] = 'slider/tambah';
$route['admin/pengaturan/slider/simpan-slider'] = 'slider/simpan';
$route['admin/pengaturan/slider/ubah-slider/(:num)'] = 'slider/ubah/$1';
$route['admin/pengaturan/slider/hapus-slider/(:num)'] = 'slider/delete/$1';


$route['admin/pengaturan/about'] = 'about';
$route['admin/pengaturan/about/tambah-about'] = 'about/tambah';
$route['admin/pengaturan/about/simpan-about'] = 'about/simpan';
$route['admin/pengaturan/about/ubah-about/(:num)'] = 'about/ubah/$1';
$route['admin/pengaturan/about/hapus-about/(:num)'] = 'about/delete/$1';

$route['admin/pengaturan/sambutan'] = 'sambutan';
$route['admin/pengaturan/sambutan/tambah-sambutan'] = 'sambutan/tambah';
$route['admin/pengaturan/sambutan/simpan-sambutan'] = 'sambutan/simpan';
$route['admin/pengaturan/sambutan/ubah-sambutan/(:num)'] = 'sambutan/ubah/$1';
$route['admin/pengaturan/sambutan/hapus-sambutan/(:num)'] = 'sambutan/delete/$1';


