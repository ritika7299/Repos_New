<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

/*---Test Routes---- */
$routes->get('/test', 'Test::index');

/*---Test Routes---- */
$routes->get('/user', 'User::index');
$routes->get('user/register', 'User::register');