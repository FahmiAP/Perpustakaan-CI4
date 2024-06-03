<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 

$routes->get('/', 'Home::user');
$routes->get('/regis','Home::regis');
$routes->get('/man', 'Home::index');
$routes->get('/log', 'Home::login');
$routes->get('/mg', 'Home::daftar');
$routes->get('/b', 'Buku::index');
$routes->get('/crud', 'Home::buku');


