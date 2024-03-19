<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/dashboard', 'Dashboard::index');

$routes->get('/dashboard/user', 'User::index');

$routes->get('/dashboard/admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/dashboard/admin/index', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/dashboard/admin/(:num)', 'Admin::detail/$1', ['filter' => 'role:admin']);
// $routes->get('/dashboard/admin/detail/(:num)', 'Admin::detail/$1', ['filter' => 'role:admin']);
$routes->get('/dashboard/admin/add-user', 'Admin::add', ['filter' => 'role:admin']);
$routes->post('/dashboard/admin/save', 'Admin::save', ['filter' => 'role:admin']);
