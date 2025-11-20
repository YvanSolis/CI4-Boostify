<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Users::index');
$routes->get('/moodboard', 'Users::moodboard_page');
$routes->get('/roadmap', 'Users::roadmap_page');

$routes->get('/login', 'Auth::login_page');
$routes->get('/signup', 'Auth::signup_page');

$routes->post('/login', 'Auth::login');
$routes->post('/logout', 'Auth::logout');
$routes->post('/signup', 'Auth::signup');

$routes->get('/admin/dashboard_page', 'Admin::dashboard_page');
