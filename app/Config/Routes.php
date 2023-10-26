<?php

use CodeIgniter\Router\RouteCollection;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('login','Login::index');
$routes->post('login/user','Login::user');
$routes->get('package','Package::index');
$routes->get('member','Member::index');
$routes->post('member/save','Member::save');
$routes->post('package/profile','Package::profile');