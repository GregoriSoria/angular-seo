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
    return view('index');
});

Route::get('/first', function () {
    return view('index', [
        'ogTitle' => 'First Page Title',
        'ogSiteName' => 'http://basewd1.hospedagemdesites.ws/hml/angular-seo',
        'ogDescription' => 'first page description',
        'ogImage' => 'http://basewd1.hospedagemdesites.ws/hml/angular-seo/public/posts/post1.jpg',
        'ogImageType' => 'image/png',
        'seoH1' => 'tag <h1> page First',
        'seoH2' => 'tag <h2> page First',
        'seoP' => 'tag <p> page First',
    ]);
});

Route::get('/second', function () {
    return view('index', [
        'ogTitle' => 'Second Page Title',
        'ogSiteName' => 'http://basewd1.hospedagemdesites.ws/hml/angular-seo',
        'ogDescription' => 'Second page description',
        'ogImage' => 'http://basewd1.hospedagemdesites.ws/hml/angular-seo/public/posts/post2.jpg',
        'ogImageType' => 'image/jpg',
        'seoH1' => 'tag <h1> page Second',
        'seoH2' => 'tag <h2> page Second',
        'seoP' => 'tag <p> page Second',
    ]);
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
