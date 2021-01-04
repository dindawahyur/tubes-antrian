<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

/* yuhuuu
 * 23-12-2020
 * Dinda - Prilla - Mila
 */
$routes->get('/', 'Pages::index');

$routes->get('/login', 'Login::index');
$routes->get('/logout', 'Login::logout');
$routes->get('/register', 'Register::index');

$routes->get('/pendaftaran', 'Pages::pendaftaran');
$routes->get('/poliklinik', 'Pages::poliklinik');
$routes->get('/infoCovid', 'Pages::covid');
$routes->get('/kontak', 'Pages::kontak');
$routes->get('/bantuan', 'Pages::bantuan');
$routes->post('/cek', 'Pages::cek', ['filter' => 'auth']);
$routes->get('/profil', 'Pages::profil', ['filter' => 'auth']);

$routes->post('/pasien', 'Pasien::save', ['filter' => 'auth']);
$routes->post('/pasien/add', 'Pasien::save', ['filter' => 'auth']);

$routes->get('/riwayat', 'Pages::riwayat', ['filter' => 'auth']);

//admin
$routes->get('/admin/dokter', 'Admindokter::index', ['filter' => 'auth']);
$routes->get('/admin/jadwal', 'Adminjadwal::index', ['filter' => 'auth']);
$routes->get('/admin/pasien', 'Admin::pasien', ['filter' => 'auth']);
//$routes->post('/mahasiswa/create/(:segment)', 'Mahasiswa::create/$1');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
