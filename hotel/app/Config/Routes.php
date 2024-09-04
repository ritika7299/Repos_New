<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->get('/login', 'Login::index');

/*----Admin Section ------ */
// $routes->get('admin', 'Admin::index');
// $routes->get('admin/dashboard', 'Admin::dashboard');
// $routes->get('admin/login_ac', 'Admin::login_ac');
// $routes->get('admin/data_table', 'Admin::data_table');
// $routes->get('admin/rooms_availability', 'Admin::rooms_availability');

/*------- Login Routes-------*/
/*$routes->get('login', 'Login::index');
$routes->post('login/authenticate', 'Login::authenticate');
$routes->post('login/auth', 'Login::auth');
$routes->post('login/dashboard', 'Login::dashboard');

// $routes->get('logout', 'Login::logout');*/

/*----User Controller routes ------ */
$routes->get('user', 'User::index');
$routes->get('user/register', 'User::register');
$routes->post('user/register', 'User::register');
$routes->get('user/dashboard', 'User::dashboard');
$routes->get('user/reservation', 'User::reservation');
$routes->get('user/invoice', 'User::invoice');
// $routes->get('user/login', 'User::login');
$routes->post('user/store', 'User::store');      //for user register

$routes->post('user/reset_password', 'User::reset_password');

$routes->get('room', 'Room::index');

