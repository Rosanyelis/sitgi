<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard','DashboardController@index')->name('dashboard');
Route::get('/login','DashboardController@cerrarsesion')->name('login');

/* Rutas Para el modulo de las categorias */

Route::get('/categoria','CategoriaController@index')->name('categoria');
Route::get('/categoria/create','CategoriaController@create')->name('/categoria/create');
Route::post('/categoria/store','CategoriaController@store')->name('/categoria/store');
Route::get('/categoria/{categoria}/edit/','CategoriaController@edit')->name('/categoria/edit/');
Route::put('/categoria/{categoria}','CategoriaController@update')->name('/categoria/update/');
Route::delete('/categoria/destroy/{categoria}','CategoriaController@destroy')->name('/categoria/destroy/');
Route::get('/categoria-pdf','CategoriaController@pdf')->name('categoria-pdf');

/* Rutas Para el modulo de las marcas */

Route::get('/marca','MarcaController@index')->name('marca');
Route::get('/marca/create','MarcaController@create')->name('/marca/create');
Route::post('/marca/store','MarcaController@store')->name('/marca/store');
Route::get('/marca/{marca}/edit/','MarcaController@edit')->name('/marca/edit/');
Route::put('/marca/{marca}/','MarcaController@update')->name('/marca/update/');
Route::delete('/marca/destroy/{marca}/','MarcaController@destroy')->name('/marca/destroy/');
Route::get('/marca-pdf','MarcaController@pdf')->name('marcas-pdf');

/* Rutas Para el modulo de la empresa */

Route::get('/empresa','EmpresaController@index')->name('empresa');
Route::get('/empresa/{empresa}/edit/','EmpresaController@edit')->name('/empresa/edit/');
Route::put('/empresa/{empresa}','EmpresaController@update')->name('/empresa/update/');

/* Rutas Para el modulo de los clientes */

Route::get('/clientes','ClienteController@index')->name('clientes');
Route::get('/clientes/create','ClienteController@create')->name('/clientes/create');
Route::post('/clientes/store','ClienteController@store')->name('/clientes/store');
Route::get('/clientes/{clientes}/edit/','ClienteController@edit')->name('/clientes/edit/');
Route::put('/clientes/{clientes}','ClienteController@update')->name('/clientes/update/');
Route::get('/clientes-pdf','ClienteController@pdf')->name('clientes-pdf');

/* Rutas Para el modulo de los proveedores */

Route::get('proveedores','ProveedorController@index')->name('proveedores');
Route::get('/proveedores/create','ProveedorController@create')->name('/proveedores/create');
Route::get('/proveedores/{proveedores}/show','ProveedorController@show')->name('/proveedores/show');
Route::post('/proveedores/store','ProveedorController@store')->name('/proveedores/store');
Route::get('/proveedores/{proveedores}/edit/','ProveedorController@edit')->name('/proveedores/edit/');
Route::put('/proveedores/{proveedores}','ProveedorController@update')->name('/proveedores/update/');
Route::get('/proveedores-pdf','ProveedorController@pdf')->name('proveedores-pdf');

/* Rutas Para el modulo de los productos */

Route::get('productos','ProductoController@index')->name('productos');
Route::get('/productos/create','ProductoController@create')->name('/productos/create');
Route::post('/productos/store','ProductoController@store')->name('/productos/store');
Route::get('/productos/{productos}/edit/','ProductoController@edit')->name('/productos/edit/');
Route::put('/productos/{productos}','ProductoController@update')->name('/productos/update/');
Route::get('/productos-pdf','ProductoController@pdf')->name('productos-pdf');

/* Rutas Para el modulo de Ingresos de Productos al Sistema */

Route::get('ingresos','IngresoController@index')->name('ingresos');
Route::get('/ingresos/create','IngresoController@create')->name('/ingresos/create');
Route::post('/ingresos/store','IngresoController@store')->name('/ingresos/store');
Route::get('/ingresos/{ingresos}/show','IngresoController@show')->name('/ingresos/show');
Route::get('ingresos-pdf','IngresoController@pdf')->name('ingresos-pdf');
Route::get('/ingresos/{ingresos}/pdf/modelopdf','IngresoController@modelo_pdf')->name('/ingresos/pdf');

/* Rutas Para el modulo de Ventas de Productos del Sistema */

Route::get('ventas','VentasController@index')->name('ventas');
Route::get('/ventas/create','VentasController@create')->name('/ventas/create');
Route::post('/ventas/store','VentasController@store')->name('/ventas/store');
Route::get('/ventas/{ventas}/show','VentasController@show')->name('/ventas/show');
Route::delete('/ventas/destroy/{ventas}/','VentasController@destroy')->name('/ventas/destroy/');
Route::get('ventas-pdf','VentasController@pdf')->name('ventas-pdf');

/* Rutas para el modulo de StockMerma*/
Route::get('stockmerma','StockmermasController@index')->name('stockmerma');
Route::get('/stockmerma/create','StockmermasController@create')->name('/stockmerma/create');
Route::post('/stockmerma/store','StockmermasController@store')->name('/stockmerma/store');
//Route::get('/stockmerma/{stockmerma}/show','StockmermasController@show')->name('/stockmerma/show');

Route::get('inventariogeneral','InventariogeneralController@index')->name('inventariogeneral');
Route::get('inventario-pdf','InventariogeneralController@pdf')->name('inventario-pdf');

/* Rutas para los Reportes PDF*/
Route::get('reportes','PDFController@index')->name('reportes');

/* Rutas para los Reportes Estadisticos*/
Route::get('estadisticas','EstadisticasController@index')->name('estadisticas');


Route::get('usuarios','UsuariosController@index')->name('usuarios');

Route::get('usuarios-pdf','UsuariosController@pdf')->name('usuarios-pdf');
//Route::get('/usuarios/create','UsuariosController@create')->name('/usuarios/create');


