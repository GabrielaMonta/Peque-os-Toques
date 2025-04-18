<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

/*Opcion Nosotros*/
$routes->get('/contacto', 'Home::contacto');
$routes->get('/sobre-nosotros', 'Home::sobreNosotros');
$routes->get('/comercializacion', 'Home::comercializacion');
$routes->get('/preguntas-frecuentes', 'Home::preguntasFrecuentes');

$routes->get('/novedades', 'Home::novedades');