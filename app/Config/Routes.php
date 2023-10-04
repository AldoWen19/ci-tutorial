<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/kami', 'Home::kami');
$routes->get('/contact', 'Home::contact');


$routes->get('/', 'Pages::index');
$routes->get('/about/contact', 'about::contact');
$routes->get('/about/contact/(:any)/(:num)', 'about::contact/$1/$2');
$routes->get('/about/(:any)/(:num)', 'about::contact/$1/$2');



