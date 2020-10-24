<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
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

$routes->get('/', 'Home::index');
$routes->get('/mahasiswa', 'Helloworld::show');
$routes->get('/chandra', function(){
	echo view("Mahasiswa/header");
	echo view("Mahasiswa/index");
	echo view("Mahasiswa/footer");
});
$routes->get('/coba/(:any)/(:num)', 'Helloworld::index/$1/$2');



// //show data dari fungsi pada controller tanpa parameter
// $routes->get('/bebas', 'Hello::show');

// //show data menggunakan 2 parameter pada fungsi Controller
// $routes->get('/detail/(:any)/(:num)', 'HelloWorld::index/$1/$2');

// //show data menggunakan variabel global
// $routes->get('/hello', 'Hello:global');

// //show data menampilkan halaman index.php
// $routes->get('/tabel', function()){
// 	echo view("mahasiswa/index");
// }
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
