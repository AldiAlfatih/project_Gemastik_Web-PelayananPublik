<?php
//sss
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::login');
$routes->get('/register', 'Home::register');
// $routes->get('/index', 'login:index');
// $routes->get('/register', 'AkunController::register');
$routes->post('/register', 'AkunController::register');
$routes->get('/login', 'AkunController::login');
$routes->get('/login', 'AkunController::autentikasi');
$routes->get('/home', 'AkunController::index');
$routes->post('/login', 'AkunController::autentikasi');

$routes->get('/', 'AkunController::index');
$routes->get('/akun/leaderboard', 'AkunController::leaderboard');

$routes->get('/akun/profile/', 'AkunController::lihat_profil');

$routes->group('admin', function($routes) {
    $routes->get('/', 'AdminController::index'); // Dashboard admin
    $routes->get('view/(:num)', 'AdminController::view/$1'); // Melihat detail laporan
    $routes->post('accept/(:num)', 'AdminController::accept/$1'); // Menerima laporan
    $routes->post('reject/(:num)', 'AdminController::reject/$1'); // Menolak laporan
});$routes->get('/pelaporan', 'ControlMenu::indexlapor');
$routes->post('/submit-report', 'ControlMenu::submit'); // Meng-handle submit laporan
$routes->get('/riwayat-laporan', 'ControlMenu::riwayatLaporan');
$routes->get('/settingProfil', 'AkunController::setting');
$routes->group('profile', ['filter' => 'auth'], function($routes) {
    $routes->get('/', 'ProfileCon::index');
    $routes->post('/update', 'ProfileCon::update');
});

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

