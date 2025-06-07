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
$routes->get('/catalogo-todo', 'CatalogoController::index');
$routes->get('catalogo/(:num)', 'CatalogoController::categoria/$1');
$routes->get('catalogo/detalle/(:num)', 'CatalogoController::detalle/$1');

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
$routes->get('/cuenta', 'Home::clientePerfil', ['filter' => 'auth:2']);
$routes->get('/mis-compras', 'Home::misCompras', ['filter' => 'auth:2']);

$routes->get('/crear', 'ProductoController::crearProducto');
$routes->post('/enviar-prod', 'ProductoController::store');

$routes->get('editar/(:num)', 'AdminController::editarUsuario/$1', ['filter' => 'auth:1']);
$routes->post('actualizar/(:num)', 'UsuarioController::actualizarUsuario/$1', ['filter' => 'auth:1']);
$routes->get('borrar/(:num)', 'UsuarioController::borrar/$1');


$routes->get('/eliminarProducto/(:num)', 'ProductoController::eliminarProducto/$1');
$routes->get('/editarProducto/(:num)', 'ProductoController::editarProducto/$1');
$routes->post('/actualizarProducto/(:num)', 'ProductoController::actualizarProducto/$1');

$routes->get('editarPerfil', 'Home::editarPerfil', ['filter' => 'auth:2']);
$routes->post('cliente-actualizar-perfil', 'UsuarioController::clienteActualizarPerfil', ['filter' => ['auth:2', 'ownerAuth']]);
