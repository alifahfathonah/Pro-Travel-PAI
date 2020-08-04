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
// $routes->get('/admin', 'Admin::home');
$routes->get('/admin/home', 'Admin::home');

// Routes Rent
// ==================================================================
// Get All & One
$routes->get('/admin/rent', 'Rent::index');
$routes->get('/admin/rent/(:num)', 'Rent::index/$1');
// Update
$routes->get('/admin/rent/update/(:num)', 'Rent::update/$1');
$routes->post('/admin/rent/update', 'Rent::update');
// Save
$routes->post('/admin/rent/store', 'Rent::store');
$routes->get('/admin/rent/store', 'Rent::create');
// Delete
$routes->get('/admin/rent/delete/(:num)', 'Rent::delete/$1');
// ==================================================================

// Routes Rent
// ==================================================================
// Get All & One
$routes->get('/admin/regular', 'Regular::index');
$routes->get('/admin/regular/(:num)', 'Regular::index/$1');
// Update
$routes->get('/admin/regular/update/(:num)', 'Regular::update/$1');
$routes->post('/admin/regular/update', 'Regular::update');
// Save
$routes->post('/admin/regular/store', 'Regular::store');
$routes->get('/admin/regular/store', 'Regular::create');
// Delete
$routes->get('/admin/regular/delete/(:num)', 'Regular::delete/$1');
// ==================================================================

// Routes Trip
// ==================================================================
// Get All & One
$routes->get('/admin/trip', 'Trip::index');
$routes->get('/admin/trip/(:num)', 'Trip::index/$1');
// Update
$routes->get('/admin/trip/update/(:num)', 'Trip::update/$1');
$routes->post('/admin/trip/update', 'Trip::update');
// Save
$routes->post('/admin/trip/store', 'Trip::store');
$routes->get('/admin/trip/store', 'Trip::create');
// Delete
$routes->get('/admin/trip/delete/(:num)', 'Trip::delete/$1');
// ==================================================================




$routes->group('', ['filter' => 'login'], function ($routes) {
	$routes->get('/admin/home', 'Admin::home');
});

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
