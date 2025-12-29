<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

service('auth')->routes($routes, ['except' => ['register']]);

$routes->get('/register', '\App\Controllers\RegisterAdd::registerView');
$routes->post('register', '\App\Controllers\RegisterAdd::registerAction');

$routes->group('admin', ['filter'=> 'group:admin'], function($routes){
    $routes->get('/', 'Admin_display_page::index');
});

$routes->group('mitra_kopsis', ['filter' => 'mitra_kopsis'], function($routes){
    $routes->get('/', 'Mitra_display_page::index');
});

$routes->group('siswa', ['filter' => 'siswa'], function($routes){
    $routes->get('/', 'Siswa_display_page::index');
});