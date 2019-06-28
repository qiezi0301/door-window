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
    return view('home');
});

//品牌故事
Route::get('/brand', function () {
    return view('brand.index');
})->name('brand');

Route::get('culture', function () {
    return view('brand.culture');
})->name('culture');

Route::get('team', function () {
    return view('brand.team');
})->name('team');

//产品中心
Route::get('/product', function () {
    return view('product.index');
})->name('product');

Route::get('/productDetail', function () {
    return view('product.detail');
})->name('productDetail');

//合作加盟
Route::get('/cooperation', function () {
    return view('cooperation.index');
})->name('cooperation');

//新闻中心
Route::get('/new', function () {
    return view('new.index');
})->name('new');

Route::get('/newDetail', function () {
    return view('new.detail');
})->name('newDetail');

//联系我们
Route::get('/contact', function () {
    return view('contact.index');
})->name('contact');