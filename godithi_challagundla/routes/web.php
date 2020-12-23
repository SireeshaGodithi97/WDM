<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['verify' => true]);

Route::group( ['middleware' => ['auth'] ], function() {

    // Admin Controller
    Route::get('/admin-dashboard', 'AdminController@admin_db')->name('admin_db');
    Route::get('/user-list', 'AdminController@user_list')->name('user_list');
    Route::get('/admin-register', 'AdminController@admin_reg')->name('admin_reg');
    Route::post('/admin-save', 'AdminController@admin_user_save')->name('admin_user_save');


    // User Controller
    Route::get('/my-dashboard', 'UserController@user_db')->name('user_db');
    Route::get('/my-event', 'UserController@user_event')->name('user_event');
    Route::get('/my-project', 'UserController@user_project')->name('user_project');
    Route::get('/event_reg/{id}', 'UserController@event_reg')->name('event_reg');
    Route::get('/event_dereg/{id}', 'UserController@event_dereg')->name('event_dereg');
    Route::get('/project_reg/{id}', 'UserController@project_reg')->name('project_reg');
    Route::get('/project_dereg/{id}', 'UserController@project_dereg')->name('project_dereg');


    Route::resource('event', 'EventController');
    Route::get('event-delete', 'EventController@eventDelete')->name('event-delete');
    Route::get('/event-reg-user/{id}', 'EventController@event_reg_user')->name('event-reg-user');


    Route::resource('project', 'ProjectController');
    Route::get('project-delete', 'ProjectController@projectDelete')->name('project-delete');
    Route::get('/project-reg-user/{id}', 'ProjectController@project_reg_user')->name('project-reg-user');

    Route::resource('video', 'VideoController');




});


Route::get('/', 'DefaultController@index')->name('home');
Route::get('/home', 'DefaultController@index')->name('home');

Route::get('/semblanza', 'DefaultController@page1')->name('page1');
Route::get('/centro-augusto-mijares', 'DefaultController@page2')->name('page2');
Route::get('/proyectos', 'DefaultController@page3')->name('page3');
Route::get('/eventos', 'DefaultController@page4')->name('page4');
Route::get('/videos', 'DefaultController@page5')->name('page5');
Route::get('/equipo', 'DefaultController@page6')->name('page6');

Route::resource('contact', 'ContactController');


