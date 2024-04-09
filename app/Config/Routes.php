<?php

use CodeIgniter\Router\RouteCollection;

// Imported controllers
use App\Controllers\Pages;
use App\Controllers\News;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


// My Defined routes for news app:
$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);

// News Routes
$routes->get('news', [News::class, 'index']);
$routes->get('news/(:segment)', [News::class, 'show']);