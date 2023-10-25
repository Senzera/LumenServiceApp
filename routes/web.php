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

$router->get('/hello-lumen/{name}', function ($name) {
    return 'Hello'.' '. $name;
});

$router->get('/login', ['middleware' => 'login', function () {
    return "<h1>Hallo, Selamat anda berhasil login</h1>";
}]);

$router->get('/register', ['middleware' => 'register', function () {
    return "<h1>Hallo, Selamat anda berhasil register</h1>";
}]);

$router->get('/logout', ['middleware' => 'logout', function () {
    return "<h1>Hallo, Selamat anda berhasil logout</h1>";
}]);

$router->get('/admin', ['middleware' => 'admin', function () {
    return "<h1>Hallo, Selamat anda berhasil login sebagai admin</h1>";
}]);

$router->get('/landingpage', ['middleware' => 'user', function () {
    return "<h1>Hallo, Selamat anda berhasil login sebagai user</h1>";
}]);

$router->get('/home', 'HomeController@index');
$router->get('/about', 'AboutController@about');
$router->get('/dashboard', 'DashboardController@index');

// 5 Route dari 5 Migrations (Tugas 4)

$router->get('/users', 'UsersController@index');
$router->get('/users/{user_id}', 'UsersController@show');
$router->post('/users', 'UsersController@store');
$router->put('/users/{id}', 'UsersController@update');
$router->delete('/users/{id}', 'UsersController@destroy');

$router->get('/products', 'ProductsController@index');
$router->get('/products/{id}', 'ProductsController@show');
$router->post('/products', 'ProductsController@store');
$router->put('/products/{id}', 'ProductsController@update');
$router->delete('/products/{id}', 'ProductsController@destroy');

$router->get('/posts', 'PostsController@index');
$router->get('/posts/{id}', 'PostsController@show');
$router->post('/posts', 'PostsController@store');
$router->put('/posts/{id}', 'PostsController@update');
$router->delete('/posts/{id}', 'PostsController@destroy');

$router->get('/tasks', 'TasksController@index');
$router->get('/tasks/{id}', 'TasksController@show');
$router->post('/tasks', 'TasksController@store');
$router->put('/tasks/{id}', 'TasksController@update');
$router->delete('/tasks/{id}', 'TasksController@destroy');

$router->get('/orders', 'OrdersController@index');
$router->get('/orders/{id}', 'OrdersController@show');
$router->post('/orders', 'OrdersController@store');
$router->put('/orders/{id}', 'OrdersController@update');
$router->delete('/orders/{id}', 'OrdersController@destroy');

$router->get('/categories', 'CategoriesController@index');

$router->get('/tags', 'TagsController@index');
