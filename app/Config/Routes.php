<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\UserController;
use App\Controllers\KelasController;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/profile', 'Home::profile');
// $routes->get('/profile/(:any)/(:any)/(:any)', [Home::class, 'profile']);
$routes->get('/user/profile', [UserController::class, 'profile']);
$routes->get('/user/create', [UserController::class, 'create']);
$routes->post('/user/store', [UserController::class, 'store']);
$routes->get('/user', [UserController::class, 'index']);

$routes->post('/user/create', [UserController::class, 'create']);

$routes->get('user/(:any)/edit', [UserController::class, 'edit']);
$routes->put('user/(:any)', [UserController::class, 'update']);
$routes->delete('/user/(:any)', [UserController::class, 'destroy']);

$routes->get('user/(:any)', [UserController::class, 'show']);




$routes->get('/kelas/create', [KelasController::class, 'create']);
$routes->get('kelas/(:any)', [KelasController::class, 'show']);
