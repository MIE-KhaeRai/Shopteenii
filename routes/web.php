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

Route::get('about', function()
{
    return View::make('pages.about');
});
Route::get('projects', function()
{
    return View::make('pages.projects');
});
Route::get('contact', function()
{
    return View::make('pages.contact');
});

Route::get('category','CategoryController@index');


Route::get('test', function() {
    return View::make('test');
 });


//function authentication from laravel framework
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// //login via facebook
// Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
// Route::get('/callback/{provider}', 'SocialController@callback');

//vertification
// Route::get('/',function(){
//     return view('welcome');
// });
// Auth::routes(['verify'=> true]);
// Route::get('/home','Homecontroller@index')->name('home');







