<?php

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

// Product API
$router->get('/products', 'ProductsController@index');
$router->post('/products', 'ProductsController@create');
$router->get('/products/{id}', 'ProductsController@edit');
$router->put('/products/{id}', 'ProductsController@update');
$router->delete('/products/{id}', 'ProductsController@delete');

// Category API
$router->get('/categories', 'CategoriesController@index');
$router->post('/categories', 'CategoriesController@create');
$router->get('/categories/{id}', 'CategoriesController@edit');
$router->put('/categories/{id}', 'CategoriesController@update');
$router->delete('/categories/{id}', 'CategoriesController@delete');

// Brand API
$router->get('/brands', 'BrandsController@index');
$router->post('/brands', 'BrandsController@create');
$router->get('/brands/{id}', 'BrandsController@edit');
$router->put('/brands/{id}', 'BrandsController@update');
$router->delete('/brands/{id}', 'BrandsController@delete');