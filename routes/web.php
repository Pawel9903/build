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

Route::get('/', 'PageController@index')->name('index');
Route::get('/galeria', 'PageController@gallery')->name('gallery');
Route::get('/uslugi', 'PageController@services')->name('services');
Route::get('/praca', 'PageController@work')->name('work');
Route::get('/kontakt', 'PageController@contact')->name('contact');
Route::post('/kontakt/wyslij', 'MailController@contact')->name('contact_send');
Route::post('/praca/wyslij', 'MailController@work')->name('work_send');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//Route::get('/clear', function() {
//
//    Artisan::call('config:clear');
//    Artisan::call('cache:clear');
//    Artisan::call('config:cache');
//    Artisan::call('storage:link');
//
//    return "Cleared!";
//
//});


//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});
