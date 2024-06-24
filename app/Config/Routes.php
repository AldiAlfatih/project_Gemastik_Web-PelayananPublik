<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::register');
// $routes->post('/login', 'Home::login');
$routes->get('/pop', 'Home::home');
$routes->get('/login', 'Home::login');
$routes->get('/register', 'Home::register');
// $routes->get('/index', 'login:index');
$routes->post('/register', 'Home::insert');