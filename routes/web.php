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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index');
Route::get('/product', 'ProductController@index');

Route::get('about', function(){
    return View::make('pages.about');
});

Route::get('projects', function(){
    return View::make('pages.projects');
});

Route::get('contact', function(){
    return View::make('pages.contact');
});

Route::get('category','CategoryController@index');


Route::get('test', function() {
    return View::make('test');
 });

 Route::get('profile', function(){
     return View::make('pages.profile');
 });

 Route::get('register', function() {
    return View::make('auth/register')->name('register');
 });


//function authentication from laravel framework
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Auth::logout();
Auth::routes(['verify' => true]);



// //login via facebook
// Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
// Route::get('/callback/{provider}', 'SocialController@callback');

//vertification
// Route::get('/',function(){
//     return view('welcome');
// });

// Route::get('/home','Homecontroller@index')->name('home');







