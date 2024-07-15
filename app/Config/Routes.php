<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/halodunia', 'HelloWorld::halodunia');
$routes->get('/formmahasiswa', 'Formmahasiswa::form');
$routes->post('/formmahasiswa/prosesForm', 'Formmahasiswa::prosesForm');
$routes->get('/latihanview', 'HelloWorld::index');
$routes->get('/layouting', 'LayoutController::index');
$routes->get('/', 'Pages::profile');
$routes->get('/skills', 'Pages::profile');