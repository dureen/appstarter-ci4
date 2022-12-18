<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index'); //default

/*
 * --------------------------------------------------------------------
 * added by Dureen Route Definitions
 * --------------------------------------------------------------------
 */

$routes->get('/signup', 'Auth\SignupController::index');
$routes->post('/signup', 'Auth\SignupController::store');
$routes->get('/signup', 'Auth\SignupController::index');
$routes->post('/signin', 'Auth\SigninController::loginAuth');
$routes->match(['get', 'post'], '/signout', 'Auth\SigninController::destroy');

$routes->get('/signin', 'Auth\SigninController::index', ['filter' => 'hasAccess']);

$routes->get('/dashboard', 'DashboardController::index', ['filter' => 'authGuard']);

$routes->get('/profile', 'ProfileController::index', ['filter' => 'authGuard']);
$routes->post('/store/(:num)', 'ProfileController::store/$1', ['filter' => 'authGuard']);
$routes->post('/update/(:num)', 'ProfileController::update/$1', ['filter' => 'authGuard']);
$routes->post('/destroy', 'ProfileController::destroy', ['filter' => 'authGuard']);

$routes->get('/users', 'UserController::index', ['filter' => 'authGuard']);


/*
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
