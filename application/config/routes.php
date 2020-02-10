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
$route['berita'] = 'front/blog';
$route['berita/(:num)'] = 'front/blog/index/$1';
$route['berita/kategori/(:any)'] = 'front/blog/kategori/$1';
$route['berita/detail/(:any)'] = 'front/blog/detail/$1';

// Fasilitas
$route['fasilitas'] = 'front/fasilitas';

// Galeri
$route['galeri'] = 'front/galeri';

// Guru dan Staff
$route['guru'] = 'front/staff';

// Struktur
$route['struktur'] = 'front/struktur';

// Mars
$route['mars'] = 'front/mars';

// Tujuan
$route['tujuan'] = 'front/tujuan';

// Visi Misi
$route['vismis'] = 'front/vismis';

// Sejarah
$route['sejarah'] = 'front/sejarah';

// Sambutan
$route['sambutan'] = 'front/sambutan';





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
$route['admin/siswa/detail-siswa/(:any)'] = 'siswa/detail_kat_siswa/$1'; 

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


//kategori artikel
$route['admin/kategori-artikel'] = 'kat_artikel';
$route['admin/kategori-artikel/tambah-artikel'] = 'kat_artikel/tambah';
$route['admin/kategori-artikel/simpan-artikel'] = 'kat_artikel/simpan';
$route['admin/kategori-artikel/ubah-artikel/(:any)'] = 'kat_artikel/ubah/$1';
$route['admin/kategori-artikel/hapus-artikel/(:any)'] = 'kat_artikel/delete/$1';

//kategori guru
$route['admin/guru'] = 'guru';
$route['admin/guru/tambah-guru'] = 'guru/tambah';
$route['admin/guru/simpan-guru'] = 'guru/simpan';
$route['admin/guru/ubah-guru/(:any)'] = 'guru/ubah/$1';
$route['admin/guru/hapus-guru/(:any)'] = 'guru/delete/$1';
$route['admin/guru/detail-guru/(:any)'] = 'guru/detail/$1'; 

//mapel
$route['admin/kategori-mapel'] = 'kat_mapel';
$route['admin/kategori-mapel/tambah-mapel'] = 'kat_mapel/tambah';
$route['admin/kategori-mapel/simpan-mapel'] = 'kat_mapel/simpan';
$route['admin/kategori-mapel/ubah-mapel/(:any)'] = 'kat_mapel/ubah/$1';
$route['admin/kategori-mapel/hapus-mapel/(:any)'] = 'kat_mapel/delete/$1';
$route['admin/kategori-mapel/detail-mapel/(:any)'] = 'kat_mapel/detail/$1'; 

//kategori fasilitas
$route['admin/kategori-fasilitas'] = 'kat_fasilitas';
$route['admin/kategori-fasilitas/tambah-fasilitas'] = 'kat_fasilitas/tambah';
$route['admin/kategori-fasilitas/simpan-fasilitas'] = 'kat_fasilitas/simpan';
$route['admin/kategori-fasilitas/ubah-fasilitas/(:any)'] = 'kat_fasilitas/ubah/$1';
$route['admin/kategori-fasilitas/hapus-fasilitas/(:any)'] = 'kat_fasilitas/delete/$1';
$route['admin/kategori-fasilitas/detail-fasilitas/(:any)'] = 'kat_fasilitas/detail/$1'; 

//fasilitas
$route['admin/fasilitas'] = 'fasilitas';
$route['admin/fasilitas/tambah-fasilitas/(:any)'] = 'fasilitas/tambah/$1';
$route['admin/fasilitas/ubah-fasilitas/(:any)'] = 'fasilitas/ubah/$1';
$route['admin/fasilitas/hapus-fasilitas/(:any)'] = 'fasilitas/delete/$1';
$route['admin/fasilitas/detail-fasilitas/(:any)'] = 'fasilitas/detail_kat_fasilitas/$1'; 


//jabatan
$route['admin/kategori-jabatan'] = 'kat_jab';
$route['admin/kategori-jabatan/tambah-jabatan'] = 'kat_jab/tambah';
$route['admin/kategori-jabatan/simpan-jabatan'] = 'kat_jab/simpan';
$route['admin/kategori-jabatan/ubah-jabatan/(:any)'] = 'kat_jab/ubah/$1';
$route['admin/kategori-jabatan/hapus-jabatan/(:any)'] = 'kat_jab/delete/$1';
$route['admin/kategori-jabatan/detail-jabatan/(:any)'] = 'kat_jab/detail/$1'; 


//organisasi
$route['admin/kategori-organisasi'] = 'kat_organisasi';
$route['admin/kategori-organisasi/tambah-organisasi'] = 'kat_organisasi/tambah';
$route['admin/kategori-organisasi/simpan-organisasi'] = 'kat_organisasi/simpan';
$route['admin/kategori-organisasi/ubah-organisasi/(:any)'] = 'kat_organisasi/ubah/$1';
$route['admin/kategori-organisasi/hapus-organisasi/(:any)'] = 'kat_organisasi/delete/$1';
$route['admin/kategori-organisasi/detail-organisasi/(:any)'] = 'kat_organisasi/detail/$1'; 


//galeri
$route['admin/galeri'] = 'galeri';
$route['admin/galeri/tambah-galeri'] = 'galeri/tambah';
$route['admin/galeri/simpan-galeri'] = 'galeri/simpan';
$route['admin/galeri/ubah-galeri/(:any)'] = 'galeri/ubah/$1';
$route['admin/galeri/hapus-galeri/(:any)'] = 'galeri/delete/$1';
$route['admin/galeri/detail-galeri/(:any)'] = 'galeri/detail/$1'; 

//profil
$route['admin/profil'] = 'profil';
$route['admin/profil/tambah-profil'] = 'profil/tambah';
$route['admin/profil/simpan-profil'] = 'profil/simpan';
$route['admin/profil/ubah-profil/(:any)'] = 'profil/ubah/$1';
$route['admin/profil/hapus-profil/(:any)'] = 'profil/delete/$1';
$route['admin/profil/detail-profil/(:any)'] = 'profil/detail/$1'; 

//pesan
$route['admin/kategori-pesan'] = 'pesan';
$route['admin/kategori-pesan/tambah-pesan'] = 'pesan/tambah';
$route['admin/kategori-pesan/simpan-pesan'] = 'pesan/simpan';
$route['admin/kategori-pesan/ubah-pesan/(:any)'] = 'pesan/ubah/$1';
$route['admin/kategori-pesan/hapus-pesan/(:any)'] = 'pesan/delete/$1';
$route['admin/kategori-pesan/detail-pesan/(:any)'] = 'pesan/detail/$1'; 

//statistik 
$route['admin/statistik-pengguna'] = 'statistik';

//administrator
$route['admin/administrator'] = 'user';
$route['admin/administrator/tambah-administrator'] = 'user/tambah';
$route['admin/administrator/simpan-administrator'] = 'user/simpan';
$route['admin/administrator/ubah-administrator/(:any)'] = 'user/ubah/$1';
$route['admin/administrator/hapus-administrator/(:any)'] = 'user/delete/$1';
$route['admin/administrator/detail-administrator/(:any)'] = 'user/detail/$1'; 

