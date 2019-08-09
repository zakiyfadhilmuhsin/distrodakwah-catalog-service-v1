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

$router->get('/products', 'ProductsController@index');

$router->get('/options', 'ProductsController@options');

//////////////
// Students //
//////////////
$router->get('/students', 'StudentsController@index');
$router->post('/students', 'StudentsController@create');
$router->put('/students/{id}', 'StudentsController@update');
$router->delete('/students/{id}', 'StudentsController@delete');

// $router->get('/key', function () {
// 	return str_random(32);
// });

// $router->get('/wakwaw', function () {
// 	return 'Wakwaw Method GET';
// });

// $router->post('/wakwaw', function () {
// 	return 'Wakwaw Method POST';
// });

// $router->put('/wakwaw', function () {
// 	return 'Wakwaw Method PUT';
// });

// $router->delete('/wakwaw', function () {
// 	return 'Wakwaw Method DELETE';
// });

// $router->get('/user/{id}', function ($id) {
// 	return 'User ' . $id;
// });

// // $router->get('/posts/{postId}/comments/{commentId}', function ($postId, $commentId) {
// // 	return "Post {$postId} Comment {$commentId}";
// // });

// $router->get('/supar[/{param}]', function ($param = null) {
// 	return $param;
// });

// $router->get('/tiren', function () {
// 	return redirect()->route('route.tier');
// });

// $router->get('/tier/kulwah', ['as' => 'route.tier', function () {
// 	return "Coba duluh";
// }]);

// $router->group(['prefix' => 'admin', 'middleware' => 'age'], function () use ($router) {
	
// 	$router->get('/qwerty', function () {
// 		return 'Qwerty Method GET - Umur Cukup';
// 	});

// });

// $router->get('/fail', function () {
// 	return 'Belum Cukup Umur';
// });

// $router->get('/generate_key', 'ExampleController@generate_key');

// $router->get('/posts/{postId}/comments/{commentId}', 'ExampleController@getPost');

// $router->get('/roma', ['as' => 'roma', 'uses' => 'ExampleController@roma']);

// $router->get('/roma/action', ['as' => 'roma.action', 'uses' => 'ExampleController@romaAction']);

// $router->post('/register', 'ExampleController@registerUser');