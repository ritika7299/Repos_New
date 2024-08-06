<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Login::index');

/*----Admin Login ------ */
$routes->get('/admin', 'Admin::index');
$routes->get('/admincon/dashboard', 'AdminCon::dashboard');

/*----Recepionist Login ------ */
$routes->get('/usercon', 'UserCon::index');
$routes->get('/usercon/register', 'UserCon::register');
$routes->get('usercon/dashboard', 'UserCon::dashboard');
$routes->get('usercon/invoice', 'UserCon::invoice');