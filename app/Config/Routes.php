<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// login 
$routes->get('/login', 'Login::index');
$routes->post('/login/auth', 'Login::auth');
$routes->get('/logout', 'Login::logout');

// admin 
$routes->get('admin', 'Office::index');
$routes->get('admin/detail/(:segment)', 'Office::detail/$1');
$routes->get('admin/edit/(:segment)', 'Office::edit/$1');
$routes->post('/admin/update/(:num)', 'Office::update/$1');
$routes->get('admin/create', 'Office::create');
$routes->post('admin/save', 'Office::save');
$routes->delete('admin/delete/(:num)', 'Office::delete/$1');

// Web Utama 
$routes->get('/', 'Home::index');
$routes->get('materi', 'Home::materi');
$routes->get('materi-detail/(:segment)', 'Home::materi_detail/$1');
// $routes->get('materi-detail', 'Home::materi_detail');
$routes->get('pelajari-materi/(:segment)', 'Home::pelajari_materi/$1');
