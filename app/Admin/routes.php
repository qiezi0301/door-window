<?php

use App\Admin\Controllers\TypeController;
use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->resource('types', 'TypeController');
    $router->resource('products', 'ProductController');
    $router->resource('journalisms', 'JournalismController');
    $router->resource('new/types', 'NewTypeController');
});
