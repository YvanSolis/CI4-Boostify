<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->get('/login', 'Users::login_page');
$routes->get('/signup', 'Users::signup_page');
$routes->get('/moodboard', 'Users::moodboard_page');
$routes->get('/roadmap', 'Users::roadmap_page');
