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

Route::get('/', function () {
    return view('welcome');
});

// closure
    Route:: get('/profil', function(){
        return " ini adalah profil siswa";
    })->name('profil');    
//Route name
    Route:: get("/tesname", function(){
        return route('profil');
    });
//Parameter
    Route::get('/profil/{id}', function($id){
        return $id;
    });
//Cotroller
    Route::get("/tescontroller", "TesController@show");

//About
Route::get('/about', function(){
    return view('about');
});  

//home
Route::get('/home', function(){
   return view('home');
})->name('home');  

//login
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login', 'AuthController@postlogin')->name('postlogin');

//logout
Route::get('/logout', 'AuthController@logout')->name('logout');

//Autentikasi
Route::group(['middleware'=> 'auth'], function(){
    //Resource
    Route::resource('siswa', "SiswaController");
    //Baru
    Route::get('/inputdata', function(){
        return view('data');
    })->name('data');   
});