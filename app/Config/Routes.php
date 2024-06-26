<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::register');
// $routes->post('/login', 'Home::login');
$routes->get('/home', 'Home::index');
$routes->get('/login', 'Home::login');
$routes->get('/register', 'Home::register');
// $routes->get('/index', 'login:index');
$routes->get('/register', 'AkunController::register');
$routes->post('/akun/register', 'AkunController::register');
$routes->get('/login', 'AkunController::login');
$routes->get('/login', 'AkunController::autentikasi');
// $routes->get('/home', 'AkunController::login');
$routes->post('/login', 'AkunController::autentikasi');

$routes->get('/', 'AkunController::index');
$routes->get('/pelaporan', 'ControlMenu::indexlapor');
$routes->post('/submit-report', 'ControlMenu::submit'); // Meng-handle submit laporan
$routes->get('/riwayat-laporan', 'ControlMenu::riwayatLaporan');
$routes->get('/settingProfil', 'AkunController::setting');
$routes->group('profile', ['filter' => 'auth'], function($routes) {
    $routes->get('/', 'ProfileCon::index');
    $routes->post('/update', 'ProfileCon::update');
});
