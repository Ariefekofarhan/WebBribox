<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/gudang', 'gudang::index');
$routes->get('gudang/add', 'Gudang::add');
$routes->post('gudang/store', 'Gudang::store');
$routes->post('gudang/update/(:num)', 'Gudang::update/$1');
$routes->get('gudang/delete/(:num)', 'Gudang::delete/$1');


$routes->get('/master_data', 'HOME::master');
$routes->get('/search', 'HOME::search');
$routes->get('/uker', 'HOME::kanca');
$routes->get('/request', 'movement::req');
$routes->get('/approving', 'movement::approve');
$routes->get('/history', 'movement::history');
$routes->get('/eos', 'users::eos');
$routes->get('/pm', 'users::pm');


