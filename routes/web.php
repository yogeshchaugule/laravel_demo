<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['middleware' => ['web']], function() {
  Route::get('/', function () {
    return view('welcome', array('title' => 'Laravel'));
  });
  Route::get('/home', function () {
    return view('welcome', array('title' => 'Laravel'));
  });

  Route::get('hello-world', function () {
    $title = 'Hello World!';
    $authors = [];
    return view('pages.helloworld', compact('authors', 'title'));
  });

  Route::get('hello-controller', 'pages\PagesController@home');
  Route::get('about', 'pages\PagesController@about');

  Route::get('cards', 'pages\CardsController@index');
  Route::get('cards/{card}', 'pages\CardsController@show');
  Route::post('cards/add', 'pages\CardsController@store');
  Route::get('cards/{card}/edit', 'pages\CardsController@edit');
  Route::patch('cards/{card}', 'pages\CardsController@update');

  // Create New Note
  Route::post('cards/{card}/notes', 'pages\NotesController@store');
  // Edit Notes
  Route::get('notes/{note}/edit', 'pages\NotesController@edit');
  // Update note.
  Route::patch('notes/{note}', 'pages\NotesController@update');
});
