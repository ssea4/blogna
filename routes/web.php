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
/*
Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function(){
    return "Hello World";
});
Route::get('/james', function(){
    return "My name is james";
});
Route::get('/services', function(){
    return view ('welcome');
});
Route::get('/contacts', function(){

    return "This is the contacts page";
});
*/
/* 
Route::get('/users/{id}', function($id){
    return 'This is users'.$id;
});

Route::get('/', function(){
    return view ("pages.index");
});
Route::get('/contacts', function(){
    return view('pages.contacts');
});
Route::get('/services', function(){
    return view('pages.services');
});
Route::get('/about', function(){
    return view('pages.about');
});
*/

//doing routing and linking it with the pages controller

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/contacts', 'PagesController@contacts');
Route::get('/donate', 'PagesController@donate');
Route::get('/biography', 'PagesController@biography');
Route::get('/biography1', 'PagesController@biography1');
Route::get('/biography2', 'PagesController@biography2');
Route::get('/biography3', 'PagesController@biography3');

Route::get('/agri', 'PagesController@agri');
Route::get('/climatechangemitigation', 'PagesController@climatechangemitigation');
Route::get('/cosumap', 'PagesController@cosumap');
Route::get('/enviprosi', 'PagesController@enviprosi');
Route::get('/forestryconservation', 'PagesController@forestryconservation');
Route::get('/infrastructure', 'PagesController@infrastructure');
Route::get('/manufacturingindustry', 'PagesController@manufacturingindustry');
Route::get('/mining', 'PagesController@mining');
Route::get('/oilandgas', 'PagesController@oilandgas');
Route::get('/solar', 'PagesController@solar');
Route::get('/solidwastemanagement', 'PagesController@solidwastemanagement');
Route::get('/waterbodyprotection', 'PagesController@waterbodyprotection');
Route::get('/wildlife', 'PagesController@wildlife');


Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');


