<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

/*Inicio*/
$routes->get('/', 'Home::index');

/*Opcion Nosotros*/
$routes->get('/contacto', 'Home::contacto');
$routes->get('/sobre-nosotros', 'Home::sobreNosotros');
$routes->get('/comercializacion', 'Home::comercializacion');
$routes->get('/preguntas-frecuentes', 'Home::preguntasFrecuentes');

/*Opcion Novedades*/
$routes->get('/novedades', 'Home::novedades');

/*Catalogo*/
$routes->get('/catalogo-indumentaria', 'Home::indumentaria');
$routes->get('/catalogo-calzado', 'Home::calzado');
$routes->get('/catalogo-blanqueria', 'Home::blanqueria');
$routes->get('/catalogo-marroquineria', 'Home::marroquineria');
$routes->get('/catalogo-todo', 'Home::verTodo');


/*Carrito */
$routes->get('/carrito', 'Home::carrito');

$routes->get('/producto', 'Home::producto');

$routes->get('/iniciar-pago', 'Home::iniciarPago');

$routes->post('/enviar-form', 'UsuarioController::registrar');


$routes->post('/enviar-login', 'LoginController::auth');
$routes->get('/panel', 'Panel_controller::index', ['filter' => 'auth']);
$routes->get('/logout', 'LoginController::logout');