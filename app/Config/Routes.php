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