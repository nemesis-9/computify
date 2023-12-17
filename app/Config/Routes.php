<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


/* ----- Main Routes ----- */
$routes->view("about", "about");


/* ----- Routes: Guest ----- */

// Redirections
$routes->addRedirect("guest", "/");
$routes->addRedirect("guest/(:any)", "/$1");

// Main Routings
$routes->get('/', 'Home::index');
$routes->get('login', 'Home::login');
$routes->get('register', 'Home::register');


/* ----- Routes: Customer ----- */

$routes->group('user', function ($routes) {

    // Redirections
    $routes->addRedirect('about', 'about');

    // Main Routings
    $routes->get('/', 'Home::index/user');

});


/* ----- Routes: Manager ----- */

$routes->group('manager', function ($routes) {

    // Redirections
    // $routes->addRedirect('about', 'about');

    // Main Routings
    $routes->get('/', 'Management\Manager\Dashboard::index');

});


/* ----- Routes: Deliverer ----- */

$routes->group('deliverer', function ($routes) {

    // Redirections
    // $routes->addRedirect('about', 'about');

    // Main Routings
    $routes->get('/', 'Management\Deliverer\Dashboard::index');

});


/* ----- Routes: Staff ----- */

$routes->group('staff', function ($routes) {

    // Redirections
    // $routes->addRedirect('about', 'about');

    // Main Routings
    $routes->get('/', 'Management\Staff\Dashboard::index');

});


/* ----- Routes: Stockkeeper ----- */

$routes->group('stockkeeper', function ($routes) {

    // Redirections
    // $routes->addRedirect('about', 'about');

    // Main Routings
    $routes->get('/', 'Management\Stockkeeper\Dashboard::index');

});


/* ----- Routes: Technician ----- */

$routes->group('technician', function ($routes) {

    // Redirections
    // $routes->addRedirect('about', 'about');

    // Main Routings
    $routes->get('/', 'Management\Technician\Dashboard::index');

});
