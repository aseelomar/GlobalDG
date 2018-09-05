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
/* 'middleware' => ['admin']*/
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function()
{
    CRUD::resource('doctor', 'DoctorCrudController');
    // … add more CRUD:resource lines for your models here
});

Route::get('/', function () {
    return view('welcome');
});
