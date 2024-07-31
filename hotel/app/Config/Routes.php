<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

/*----User Login ------ */
$routes->get('/login', 'Login::index');

/*----Admin Login ------ */
$routes->get('/admin', 'Admin::index');
$routes->get('/admin/dashboard', 'Admin::dashboard');

/*This is deskapp maniputation*/
// Auth
$routes->get('/auth', 'Auth::index');
/*--------------------------------------------------------------------------- */
$routes->group('admin', static function ($routes) {
    $routes->group('', [], static function ($routes) {
        $routes->view('example-page', 'example-page');
    });

    $routes->group('', [], static function ($routes) {
        $routes->view('example-auth', 'example-auth');
    });
});