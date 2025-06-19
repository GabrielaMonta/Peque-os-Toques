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
$routes->get('novedades', 'CatalogoController::novedades');

/*Catalogo*/
$routes->get('catalogo', 'CatalogoController::index');
$routes->get('catalogo/detalle/(:num)', 'CatalogoController::detalle/$1');

/*Carrito */
$routes->get('/carrito', 'Home::carrito');
$routes->get('/producto', 'Home::producto');
$routes->get('/iniciar-pago', 'ClienteController::iniciarPago', ['filter' => 'auth:2']);
$routes->post('/enviar-form', 'UsuarioController::registrar');


$routes->post('/enviar-login', 'LoginController::auth');
$routes->get('/logout', 'LoginController::logout');


$routes->get('setup-admin', 'AdminController::setup');//crear un admin
$routes->get('/admin', 'AdminController::panelAdmin', ['filter' => 'auth:1']);
$routes->get('/crud-usuarios', 'AdminController::crudUsuarios', ['filter' => 'auth:1']);
$routes->get('/crud-productos', 'AdminController::crudProductos', ['filter' => 'auth:1']);
$routes->get('/ventas', 'AdminController::ventas', ['filter' => 'auth:1']);
$routes->get('/consultas', 'AdminController::consultas', ['filter' => 'auth:1']);
$routes->post('/enviar-consulta', 'ConsultaController::enviar');


$routes->get('setup', 'SetupController::index');
$routes->match(['get', 'post'], 'setup/create', 'SetupController::create');

$routes->get('/crear', 'ProductoController::crearProducto');
$routes->post('/enviar-prod', 'ProductoController::store');

$routes->get('editar/(:num)', 'AdminController::editarUsuario/$1', ['filter' => 'auth:1']);
$routes->post('actualizar/(:num)', 'UsuarioController::actualizarUsuario/$1', ['filter' => 'auth:1']);
$routes->get('borrar/(:num)', 'UsuarioController::borrar/$1');


$routes->get('/eliminarProducto/(:num)', 'ProductoController::eliminarProducto/$1');
$routes->get('/editarProducto/(:num)', 'ProductoController::editarProducto/$1');
$routes->post('/actualizarProducto/(:num)', 'ProductoController::actualizarProducto/$1');

$routes->get('/cuenta', 'ClienteController::clientePerfil', ['filter' => 'auth:2']);
$routes->get('/mis-compras', 'ClienteController::misCompras', ['filter' => 'auth:2']);
$routes->get('editarPerfil', 'ClienteController::editarPerfil', ['filter' => 'auth:2']);
$routes->post('cliente-actualizar-perfil', 'ClienteController::clienteActualizarPerfil', ['filter' => 'auth:2']);

$routes->get('/direcciones', 'ClienteController::misDirecciones', ['filter' => 'auth:2']);
$routes->get('/nuevaDireccion', 'ClienteController::nuevaDireccion', ['filter' => 'auth:2']);
$routes->post('/agregar-direccion', 'ClienteController::agregarDireccion', ['filter' => 'auth:2']);

$routes->get('/editar-direccion/(:num)', 'ClienteController::editarDireccion/$1', ['filter' => 'auth:2']);
$routes->post('/actualizar-direccion/(:num)', 'ClienteController::actualizarDireccion/$1', ['filter' => 'auth:2']);
$routes->get('/eliminar-direccion/(:num)', 'ClienteController::eliminarDireccion/$1', ['filter' => 'auth:2']);
$routes->post('carrito-add', 'CarritoController::add');

$routes->post('carrito-eliminar', 'CarritoController::eliminar');

$routes->get('consultas/atender/(:num)', 'ConsultaController::atender_consultas/$1');
$routes->get('consultas/eliminar/(:num)', 'ConsultaController::eliminar_consulta/$1');
$routes->post('consultas/responder/(:num)', 'ConsultaController::responder/$1');

