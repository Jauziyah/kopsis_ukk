<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

service('auth')->routes($routes, ['except' => ['login']]);

$routes->get('login' , '\CodeIgniter\Shield\Controllers\LoginController::loginView');
$routes->post('login', '\App\Controllers\LoginAdd::index');

$routes->group('admin', ['filter'=> 'group:admin'], function($routes){
    $routes->get('/', 'Admin_display_page::index');
    $routes->get('accept_request/(:num)', 'Admin_penjual_approve::accept/$1', ['filter' => 'session']);
    $routes->get('reject_request/(:num)', 'Admin_penjual_approve::reject/$1', ['filter' => 'session']);
});

$routes->group('mitra_kopsis', ['filter' => 'mitra_kopsis'], function($routes){
    $routes->get('/', 'Mitra_display_page::index');
});

$routes->group('siswa', ['filter' => 'siswa'], function($routes){
    $routes->get('/', 'Siswa_display_page::index');
    $routes->post('request_penjual', 'Siswa_request_penjual::request', ['filter' => 'session']);

    // approve request penjual routes
});
