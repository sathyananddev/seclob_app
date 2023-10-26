<?php

use CodeIgniter\Router\RouteCollection;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('login','Login::index');
$routes->post('package','Package::index');
$routes->post('member','Member::index');