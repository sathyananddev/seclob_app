<?php

use CodeIgniter\Router\RouteCollection;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('login','Login::index');
$routes->post('login/user','Login::user');
$routes->get('user/logout','Login::logout');
$routes->get('package','Package::index');
$routes->post('package/save','Package::save');
$routes->get('member','Member::index');
$routes->post('member/save','Member::save');
$routes->get('member/profile','Member::profile');