<?php

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('register', ['as' => 'auth.register', 'uses' => 'AuthController@register']);
Route::get('login', ['as' => 'auth.login', 'uses' => 'AuthController@login']);
Route::post('login', ['uses' => 'AuthController@attempt']);
Route::get('logout', ['as' => 'auth.logout', 'uses' => 'AuthController@logout']);
Route::get('article/{article}', ['as' => 'article', 'uses' => 'HomeController@article']);
Route::get('contacts', ['as' => 'contacts', 'uses' => 'HomeController@contacts']);
Route::get('register', ['as' => 'register', 'uses' => 'HomeController@register']);
Route::post('register', ['uses' => 'HomeController@storeRegistration']);
Route::resource('gallery', 'GalleryController');

Route::group(['prefix' => 'admin', 'before' => 'admin'], function() {
    Route::get('/', ['as' => 'admin.index', 'uses' => 'AdminController@index']);
    Route::resource('articles', 'ArticlesController');
    Route::resource('penalties', 'PenaltiesController');
    Route::resource('messages', 'MessagesController');
    Route::resource('apartments', 'ApartmentsController');
    Route::resource('rooms', 'RoomsController');
    Route::resource('rooms.equipment', 'EquipmentController');
    Route::resource('rooms.keys', 'KeysController');
    Route::resource('images', 'ImagesController');
    Route::resource('registrations', 'RegistrationsController');
});

Route::group(['prefix' => 'manager', 'before' => 'manager'], function() {
    Route::get('/', ['as' => 'manager.index', 'uses' => 'ManagerController@index']);
    Route::resource('guests', 'GuestsController');
    Route::resource('trash', 'TrashController');
    Route::resource('complaints', 'ComplaintResponsesController');
    Route::resource('keys', 'KeyIssuesController');
});

Route::group(['prefix' => 'user', 'before' => 'user'], function() {
    Route::get('/', ['as' => 'user.index', 'uses' => 'UserController@index']);
    Route::resource('complaints', 'ComplaintsController');
    Route::resource('messages', 'UserMessagesController');
    Route::resource('equipment', 'ReservationsController');
});