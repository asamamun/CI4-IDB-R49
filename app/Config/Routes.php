<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/posts', 'PostController::index');

$routes->get('/allfilms', 'FilmController::index');
$routes->get('/register', 'RegisterController::add');
$routes->get('/login', 'RegisterController::login');
$routes->get('/products', 'ProductController::index');
$routes->get('/product/create', 'ProductController::create');
$routes->post('/product/create', 'ProductController::store');
$routes->get('/addtocart/(:segment)', 'CartController::add/$1');
$routes->get('/cart', 'CartController::cartitems');
$routes->get('/cart/remove/(:segment)', 'CartController::remove/$1');
$routes->get('/email', 'EmailController::email');
$routes->post('/email/send', 'EmailController::send');
$routes->get('/datatable', 'TableController::index');
$routes->get('/text', 'TextController::index');
$routes->get('/layouts', 'LayoutController::index');
$routes->get('/pdf', 'PdfController::index');
$routes->get('/pdf/download', 'PdfController::pdf');
$routes->get('fileupload', 'UploadController::index');
$routes->post('fileupload', 'UploadController::upload');
$routes->get('customhelper', 'HelperController::index');

/* $routes->get('about-us', 'Site::aboutUs');
$routes->get('contact-us', 'Site::Contact');
$routes->match(["get", "post"], 'my-form', 'Site::myForm'); */
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
