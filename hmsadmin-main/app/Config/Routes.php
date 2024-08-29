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
$routes->set404Override(static function () {
    echo view('/errors/error-404');
});
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


$routes->group('auth', static function ($routes) {
    $routes->match(['get', 'post'], '/', 'AuthController::login', ["filter" => "noauth"]);
    $routes->get('register', 'AuthController::register', ["filter" => "noauth"]);
    $routes->get('forget_password', 'AuthController::forgetPassword', ["filter" => "noauth"]);
    $routes->get('logout', 'AuthController::logout');
});

$routes->group('dashboard', ["filter" => "auth"], static function ($routes) {
    $routes->get('/', 'DashboardController::index');
});

$routes->group('accounts', ["filter" => "auth"], static function ($routes) {
    $routes->group('expenses', static function ($routes) {
        $routes->get('/', 'AccountsController::viewExpense');
        $routes->get('add', 'AccountsController::addExpense');
        $routes->get('edit', 'AccountsController::editExpense');
    });

    $routes->group('invoices', static function ($routes) {
        $routes->get('/', 'AccountsController::viewInvoices');
        $routes->get('add', 'AccountsController::addInvoice');
        $routes->get('edit', 'AccountsController::editInvoice');
    });

    $routes->group('payments', static function ($routes) {
        $routes->get('/', 'AccountsController::viewPayments');
        $routes->get('add', 'AccountsController::addPayment');
        $routes->get('edit', 'AccountsController::editPayment');
    });

    $routes->group('taxes', static function ($routes) {
        $routes->get('/', 'AccountsController::viewTaxes');
        $routes->get('add', 'AccountsController::addTax');
        $routes->get('edit', 'AccountsController::editTax');
    });

    $routes->group('provident_funds', static function ($routes) {
        $routes->get('/', 'AccountsController::viewProvidentfunds');
        $routes->get('add', 'AccountsController::addProvidentfund');
        $routes->get('edit', 'AccountsController::editProvidentfund');
    });
});

$routes->group('activities', ["filter" => "auth"], static function ($routes) {
    $routes->get('/', 'ActivitiesController::index');
});


$routes->group('bookings', ["filter" => "auth"], static function ($routes) {
    $routes->get('/', 'BookingsController::index');
    $routes->get('add', 'BookingsController::addBooking');
    $routes->get('edit', 'BookingsController::editBooking');
});

$routes->group('calender', ["filter" => "auth"], static function ($routes) {
    $routes->get('/', 'CalenderController::index');
});

$routes->group('customers', ["filter" => "auth"], static function ($routes) {
    $routes->get('/', 'CustomersController::index');
    $routes->get('add', 'CustomersController::addCustomer');
    $routes->get('edit', 'CustomersController::editCustomer');
});


$routes->group('employees', ["filter" => "auth"], static function ($routes) {
    $routes->get('/', 'EmployeesController::index');
    $routes->get('add', 'EmployeesController::addEmployee');
    $routes->get('edit', 'EmployeesController::editEmployee');
    $routes->get('delete', 'EmployeesController::deleteEmployee');

    $routes->group('attendance', static function ($routes) {
        $routes->get('/', 'EmployeesController::viewAttendances');
        $routes->get('add', 'EmployeesController::addAttendance');
        $routes->get('edit', 'EmployeesController::editAttendance');
    });

    $routes->group('holidays', static function ($routes) {
        $routes->get('/', 'EmployeesController::viewHolidays');
        $routes->get('add', 'EmployeesController::addHodidays');
        $routes->get('edit', 'EmployeesController::editHolidays');
    });

    $routes->group('leaves', static function ($routes) {
        $routes->get('/', 'EmployeesController::viewLeaves');
        $routes->get('add', 'EmployeesController::addLeaves');
        $routes->get('edit', 'EmployeesController::editLeaves');
    });
});


$routes->group('pricings', ["filter" => "auth"], static function ($routes) {
    $routes->get('/', 'PricingsController::index');
    $routes->get('add', 'PricingsController::addPricing');
    $routes->get('edit', 'PricingsController::editPricing');
});

$routes->group('users', ["filter" => "auth"], static function ($routes) {
    $routes->get('/', 'UsersController::index');
    $routes->get('profile', 'UserController::editProfile');
});

$routes->group('reports', ["filter" => "auth"], static function ($routes) {
    $routes->get('/', 'ReportsController::expenses');
    $routes->get('expenses', 'ReportsController::expenses');
    $routes->get('invoices', 'ReportsController::invoices');
});

$routes->group('rooms', ["filter" => "auth"], static function ($routes) {
    $routes->get('/', 'RoomsController::index');
    $routes->get('add', 'RoomsController::addRoom');
    $routes->get('edit', 'RoomsController::editRoom');
});


$routes->group('blogs', ["filter" => "auth"], static function ($routes) {
    $routes->get('/', 'BlogsController::index');
    $routes->get('add', 'BlogsController::addBlog');
    $routes->get('edit', 'BlogsController::editBlog');
    $routes->get('blog', 'BlogsController::showBlog');
    $routes->get('delete', 'BlogsController::deleteBlog');
});


$routes->group('staffs', ["filter" => "auth"], static function ($routes) {
    $routes->get('/', 'Staffs::index');
    $routes->get('add', 'StaffsController::addStaff');
    $routes->get('edit', 'StaffsController::editStaff');
});


$routes->group('settings', ["filter" => "auth"], static function ($routes) {
    $routes->get('/', 'SettingsController::index');
    $routes->get('change-password', 'SettingsController::changePassword');
    $routes->get('email', 'SettingsController::email');
    $routes->get('invoice', 'SettingsController::invoice');
    $routes->get('localisation', 'SettingsController::localisation');
    $routes->get('notification', 'SettingsController::notification');
    $routes->get('roles-permission', 'SettingsController::rolesPermission');
    $routes->get('salary', 'SettingsController::salary');
    $routes->get('theme', 'SettingsController::theme');
});
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
