<?php

// GET | home
Route::get('/', [
    'uses' => 'PageController@home',
    'as' => 'home'
]);

// GET | create
Route::get('/items/create',[
    'uses' => 'ItemController@create',
    'as' => 'item.create'
]);

// POST | create process
Route::post('/items/store',[
    'uses' => 'ItemController@store',
    'as' => 'item.store'
]);

// GET | all
Route::get('/items',[
    'uses' => 'ItemController@index',
    'as' => 'item.list'
]);

// GET | single
Route::get('/items/show/{id}',[
    'uses' => 'ItemController@show',
    'as' => 'item.show'
]);

// GET | edit
Route::get('/items/edit/{id}',[
    'uses' => 'ItemController@edit',
    'as' => 'item.edit'
]);

// PUT | edit process
Route::put('/items/update/{id}',[
    'uses' => 'ItemController@update',
    'as' => 'item.update'
]);

// DELETE | delete process
Route::delete('/items/delete/{id}',[
    'uses' => 'ItemController@destroy',
    'as' => 'item.delete'
]);