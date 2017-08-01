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


Route::get('pdf-personal', 'PdfController@pers')->name('pdf.pers');
Route::get('pdf-confidentiality', 'PdfController@conf')->name('pdf.conf');
Route::post('post', 'IndexController@post')->name('index.post');
Route::group(['middleware' => 'guest'], function (){
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
});
Route::group(['middleware' => 'auth'], function (){
    Route::post('logout',['as'=>'logout', 'uses' => 'Auth\LoginController@logout']);
});

Route::group(['middleware' => ['role:admin','auth'], 'prefix' => 'admincp'], function (){
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::resource('bg', 'BackgroundController');
    Route::resource('setting', 'SettingController');
    Route::resource('menu', 'MenuController');
    Route::resource('meta', 'MetaController');
    Route::get('title/{page}/get' , 'TitleController@get_for_page')->name('title.page');
    Route::resource('title', 'TitleController');
    Route::resource('doctor', 'DoctorController');
    Route::get('doctor/{page}/show', 'DoctorController@get_doctor')->name('doctor.page.get');
    Route::patch('doctor/{page}/show', 'DoctorController@post_doctor')->name('doctor.page.post');
    Route::resource('slider', 'SliderController');
    Route::get('text/{page}', 'TextController@get')->name('text.get');
    Route::patch('text/{page}', 'TextController@post')->name('text.post');
    Route::resource('info', 'InfografController');
    Route::get('reviews', 'ReviewsController@index')->name('rev.index');
    Route::get('reviews/visible', 'ReviewsController@visible')->name('rev.visible');
    Route::get('reviews/novisible', 'ReviewsController@novisible')->name('rev.novisble');
    Route::get('reviews/get', 'ReviewsController@get')->name('rev.get');
    Route::patch('reviews/edit/{id}', 'ReviewsController@edit')->name('rev.edit');
    Route::get('application', 'ApplicationController@index')->name('application.index');
    Route::get('password', 'PasswordController@get')->name('pass.get');
    Route::patch('password', 'PasswordController@patch')->name('pass.post');

});
Route::get('/{page?}', 'IndexController@index')->name('index');
