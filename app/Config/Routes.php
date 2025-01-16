<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/register', 'Home::register');


$routes->get('/admin', 'admin::login');
$routes->get('/dashboard', 'admin::dashboard');
