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

use App\NewType;

Route::post('/deploy','DeploymentController@deploy');

Route::get('/', function () {
    $newTypes = NewType::all();
    return view('home',compact('newTypes'));
});

//品牌故事
Route::get('/brand', function () {
    $newTypes = NewType::all();
    return view('brand.index',compact('newTypes'));
})->name('brand');

Route::get('culture', function () {
    $newTypes = NewType::all();
    return view('brand.culture',compact('newTypes'));
})->name('culture');

Route::get('team', function () {
    $newTypes = NewType::all();
    return view('brand.team',compact('newTypes'));
})->name('team');

//产品中心
Route::get('/product', 'ProductController@index')->name('product');
Route::get('/product/{tid}', 'ProductController@index');
Route::get('/productDetail/{id}', 'ProductController@show');

//合作加盟
Route::get('/cooperation', function () {
    $newTypes = NewType::all();
    return view('cooperation.index',compact('newTypes'));
})->name('cooperation');

//新闻中心
Route::get('/new', 'JournalismController@index')->name('new');
Route::get('/new/{tid}', 'JournalismController@index');
Route::get('/newDetail/{id}', 'JournalismController@show');

//联系我们
Route::get('/contact', function () {
    $newTypes = NewType::all();
    return view('contact.index',compact('newTypes'));
})->name('contact');