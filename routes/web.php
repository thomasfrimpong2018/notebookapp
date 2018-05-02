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


Route::group(['middleware'=>'auth'],function(){

    Route::get('/', function () {
        return view('frontpage');
    });


    Route::get('/notebooks','NotebooksController@index');
    Route::post('/notebooks','NotebooksController@store');
    Route::get('/notebooks/create','NotebooksController@create');
    Route::get('/notebooks/{notebook}/edit','NotebooksController@edit');
    Route::get('/notebooks/{notebook}','NotebooksController@show')->name('notebooks.show');
    Route::put('/notebooks/{notebook}','NotebooksController@update');
    Route::delete('/notebooks/{notebook}','NotebooksController@destroy');


    Route::resource("notes",'NotesController');
    Route::get('notes/{noteId}/createnote','NotesController@createnote')->name('notes.createnote');

});
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
