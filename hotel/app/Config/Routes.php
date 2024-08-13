<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->get('/login', 'Login::index');

/*----Admin Section ------ */
$routes->get('admin', 'Admin::index');
$routes->get('admin/dashboard', 'Admin::dashboard');
$routes->get('admin/login_ac', 'Admin::login_ac');
$routes->get('admin/data_table', 'Admin::data_table');

/*----User Section (User) ------ */
$routes->get('user', 'User::index');
// $routes->get('user/register', 'User::register');
// $routes->get('user/dashboard', 'User::dashboard');
// $routes->get('user/reservation', 'User::reservation');
// $routes->get('user/invoice', 'User::invoice');

/*------- Login Routes-------*/
$routes->get('login', 'Login::index');
$routes->post('login/authenticate', 'Login::authenticate');
// $routes->get('logout', 'Login::logout');