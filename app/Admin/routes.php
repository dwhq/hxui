<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->get('/image', 'ImageController@index');
    $router->get('/image/create', 'ImageController@create');
    $router->post('/image', 'ImageController@store');
    $router->delete('/image/{id}', 'ImageController@destroy');
    $router->get('/image/{id}/edit', 'ImageController@edit');
    $router->put('image/{id}', 'ImageController@update');
    $router->post('/upload', 'uploadController@upload');
});
