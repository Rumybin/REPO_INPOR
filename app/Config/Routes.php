<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'home::index');
$routes->get('/olim', 'contrololim::index');
$routes->get('/sport', 'controlsport::index');
$routes->get('/diniyah', 'controldiniyah::index');
$routes->get('/olim/lelembut', 'Contrololim::lelembut');
$routes->get('/jadwal', 'controljadwal::index');
$routes->get('/halaman(:any)', 'controlhalaman::index/$1');



// $routes->get('/ekstrakurikuler', 'EkstrakurikulerController::index');
// $routes->get('/ekstrakurikuler', 'EkstrakurikulerController::Namahari');
