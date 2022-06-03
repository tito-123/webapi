<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/api/empresas', 'EmpresasController@index');
$router->get('/api/empresas/{id}', 'EmpresasController@show');
$router->post('/api/empresas', 'EmpresasController@store');
$router->put('/api/empresas/{id}', 'EmpresasController@update');
$router->delete('/api/empresas/{id}', 'EmpresasController@destroy');