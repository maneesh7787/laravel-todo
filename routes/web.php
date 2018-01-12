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
    return view('welcome');
});

Route::get('/todos',[
    'uses'=>'PagesController@index'
]);

Route::post('/create/todo',[
    'uses'=>'PagesController@store'
]);

Route::get('delete/todo/{id}',[
    'uses'=>'PagesController@delete',
    'as'=>'todo.delete'
]);

 Route::get('update/todo/{id}',[
        'uses'=>'PagesController@update',
        'as'=>'todo.update'
    ]);

 Route::post('edit/todo/{id}',[
        'uses'=>'PagesController@edit',
        'as'=>'todo.edit'
    ]);

 Route::get('completed/todo/{id}',[
     'uses'=>'PagesController@completed',
     'as'=>'todo.completed'
 ]);