<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::register');
// $routes->post('/login', 'Home::login');
$routes->get('/pop', 'Home::home');
$routes->get('/login', 'Home::login');
$routes->get('/register', 'Home::register');
// $routes->get('/index', 'login:index');
$routes->post('/register', 'Home::insert');
$routes->get('/register', 'AkunController::register');
$routes->post('/akun/register', 'AkunController::register');
$routes->get('/login', 'AkunController::login');
$routes->get('/login', 'AkunController::autentikasi');
// $routes->get('/home', 'AkunController::login');
$routes->post('/login', 'AkunController::autentikasi');

$routes->get('/', 'AkunController::index');
$routes->get('/akun/leaderboard', 'AkunController::leaderboard');

$routes->get('/akun/profile/', 'AkunController::lihat_profil');

$routes->group('admin', function($routes) {
    $routes->get('/', 'AdminController::index'); // Dashboard admin
    $routes->get('view/(:num)', 'AdminController::view/$1'); // Melihat detail laporan
    $routes->post('accept/(:num)', 'AdminController::accept/$1'); // Menerima laporan
    $routes->post('reject/(:num)', 'AdminController::reject/$1'); // Menolak laporan
});