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
$routes->get('/home', 'Home::index');
$routes->get('/artikel', 'Artikel::index');
$routes->get('/video_edukasi', 'Video_edukasi::index');
$routes->get('/lokasi_bank_sampah', 'Lokasi_bank_sampah::index');
$routes->get('/penukaran_poin', 'Penukaran_poin::index');
$routes->get('/sedekah_barang', 'Sedekah_barang::index');
$routes->post('/login', 'AkunController::autentikasi');

$routes->get('/', 'AkunController::index');
