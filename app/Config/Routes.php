<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


//El slash "/" representa el HOME de tu aplicación
//es decir www.miweb.com/programador

$routes->get('/', 'Home::dashboard');
$routes->get('/senati', 'Home::index'); //Primer ejemplo de navegación

//¿Cómo funciona una ruta?
//$routes->verbo('/ruta/', 'Controlador::MetodoAccion');
//Nota: Es posible crear más de una ruta para una vista

$routes->get('/programador', 'Carrera::showIngenieria');
$routes->get('/coder', 'Carrera::showIngenieria');

$routes->get('/creativo', 'Carrera::showDesign');
$routes->get('/marketing', 'Carrera::showDesign');

//Nuevas rutas para navegar desde DASHBOARD
$routes->get('/clientes','Cliente::index');//muestra la tabla con datos
$routes->get('/clientes/registrar','Cliente::create');//Muestra solo el formulario 
$routes->post('/clientes/guardar','Cliente::registrarCliente');//Envía los datos del formulario a la tabla
$routes->get('/clientes/eliminar/(:num)', 'Cliente::eliminar/$1');

$routes->get('/proveedores','Proveedor::index');
$routes->get('/proveedores/registrarProveedor','Proveedor::registrarProveedor');
$routes->post('/proveedores/guardar','Proveedor::guardar');
$routes->get('/proveedores/eliminar/(:num)','Proveedor::eliminar/$1');

$routes->get('/productos', 'Producto::index');
$routes->get('/productos/registrarProducto', 'Producto::registrarProducto');
$routes->post('/productos/guardar', 'Producto::guardar');
$routes->get('/productos/eliminar/(:num)', 'Producto::eliminar/$1');
