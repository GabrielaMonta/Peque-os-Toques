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

$routes->get('/iniciar-pago', 'Home::iniciarPago', ['filter' => 'auth:2']);

$routes->post('/enviar-form', 'UsuarioController::registrar');


$routes->post('/enviar-login', 'LoginController::auth');
$routes->get('/logout', 'LoginController::logout');


$routes->get('setup-admin', 'AdminController::setup');//crear un admin
$routes->get('/admin', 'AdminController::panelAdmin', ['filter' => 'auth:1']);
$routes->get('/crud-usuarios', 'AdminController::crudUsuarios', ['filter' => 'auth:1']);
$routes->get('/crud-productos', 'AdminController::crudProductos', ['filter' => 'auth:1']);
$routes->get('/ventas', 'AdminController::ventas', ['filter' => 'auth:1']);


$routes->get('setup', 'SetupController::index');
$routes->match(['get', 'post'], 'setup/create', 'SetupController::create');
$routes->get('/editar-perfil', 'Home::editarPerfil', ['filter' => 'auth:2']);
$routes->get('/mis-compras', 'Home::misCompras', ['filter' => 'auth:2']);

$routes->get('/crear', 'ProductoController::crearProducto');
$routes->post('/enviar-prod', 'ProductoController::store');

$routes->get('editar/(:num)', 'AdminController::editarUsuario/$1', ['filter' => 'auth:1']);
$routes->post('actualizar/(:num)', 'AdminController::actualizarUsuario/$1', ['filter' => 'auth:1']);
$routes->get('borrar/(:num)', 'AdminController::borrar/$1');
