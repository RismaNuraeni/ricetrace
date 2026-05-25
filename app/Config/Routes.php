<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

// Autentikasi
$routes->get('/', 'Auth::login');
$routes->post('auth/processLogin', 'Auth::processLogin');
$routes->get('auth/logout', 'Auth::logout');

// Admin
$routes->get('admin', 'Admin::index', [
    'filter' => 'role:admin'
]);


// Petani
$routes->get('panen', 'Panen::index', [
    'filter' => 'role:admin,petani'
]);

$routes->get('data-panen', 'Panen::dataPanen', [
    'filter' => 'role:admin,petani'
]);

$routes->get('panen/create', 'Panen::create', [
    'filter' => 'role:admin,petani'
]);

$routes->post('panen/store', 'Panen::store', [
    'filter' => 'role:admin,petani'
]);

$routes->get('panen/edit/(:num)', 
'Panen::edit/$1', [
    'filter' => 'role:admin,petani'
]);

$routes->post('panen/update/(:num)', 
'Panen::update/$1', [
    'filter' => 'role:admin,petani'
]);

$routes->get('panen/delete/(:num)', 
'Panen::delete/$1', [
    'filter' => 'role:admin,petani'
]);

// Penggilingan
$routes->get('penggilingan', 'Penggilingan::index', [
    'filter' => 'role:admin,penggilingan'
]);

$routes->get('data-penggilingan', 'Penggilingan::dataPenggilingan', [
    'filter' => 'role:admin,penggilingan'
]);

$routes->get('penggilingan/create', 'Penggilingan::create', [
    'filter' => 'role:admin,penggilingan'
]);

$routes->post('penggilingan/store', 'Penggilingan::store', [
    'filter' => 'role:admin,penggilingan'
]);

$routes->get('penggilingan/edit/(:num)', 
'Penggilingan::edit/$1', [
    'filter' => 'role:admin,penggilingan'
]);

$routes->post('penggilingan/update/(:num)', 
'Penggilingan::update/$1', [
    'filter' => 'role:admin,penggilingan'
]);

$routes->get('penggilingan/delete/(:num)', 
'Penggilingan::delete/$1', [
    'filter' => 'role:admin,penggilingan'
]);

// Distributor
$routes->get('distributor', 'Distributor::index', [
    'filter' => 'role:admin,distributor'
]);

$routes->get('data-distribusi', 'Distributor::distribusi', [
    'filter' => 'role:admin,distributor'
]);

$routes->get('distributor/create', 'Distributor::create', [
    'filter' => 'role:admin,distributor'
]);

$routes->post('distributor/store', 'Distributor::store', [
    'filter' => 'role:admin,distributor'
]);

$routes->get('distributor/edit/(:num)', 
'Distributor::edit/$1', [
    'filter' => 'role:admin,distributor'
]);

$routes->post('distributor/update/(:num)', 
'Distributor::update/$1', [
    'filter' => 'role:admin,distributor'
]);

$routes->get('distributor/delete/(:num)', 
'Distributor::delete/$1', [
    'filter' => 'role:admin,distributor'
]);


// Traceability
$routes->get(
    '/traceability/detail/(:any)',
    'Traceability::detail/$1'
);

$routes->get(
    '/traceability/qr/(:any)',
    'Traceability::qr/$1'
);