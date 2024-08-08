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

/*----Recepionist Section (User) ------ */
$routes->get('user', 'User::index');
$routes->get('user/register', 'User::register');
$routes->get('user/dashboard', 'User::dashboard');
$routes->get('user/reservation', 'User::reservation');
$routes->get('user/invoice', 'User::invoice');