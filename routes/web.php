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
// Facebook 
Route::get('/bot',function(){
    return File::get('fb.txt');
});

// Gol holboltuud

Route::get('/', 'App\Http\Controllers\frontcontroller@index');

Route::get('article/{slug}','App\Http\Controllers\frontcontroller@article');

// Route::get('/post', 'App\Http\Controllers\frontcontroller@category');

Route::get('/category/{slug}', 'App\Http\Controllers\frontcontroller@category');

//admin

Route::get('/admin', 'App\Http\Controllers\admincontroller@index');

// category Routuud 

Route::get('/viewcategory', 'App\Http\Controllers\admincontroller@viewcategory');

Route::post('addcategory','App\Http\Controllers\crudController@insertData');

Route::get('editcategory/{id}','App\Http\Controllers\adminController@editCategory');

Route::post('updatecategory/{id}','App\Http\Controllers\crudController@updateData');

Route::post('multipledelete','App\Http\Controllers\adminController@multipleDelete');

// Settings

Route::get('setting','App\Http\Controllers\adminController@settings');

Route::Post('addsettings','App\Http\Controllers\crudController@insertData');

Route::Post('updatesettings/{id}','App\Http\Controllers\crudController@updateData');

// Posts

Route::get('add-post','App\Http\Controllers\adminController@addPost');

Route::Post('addpost','App\Http\Controllers\crudController@insertData');

Route::get('all-posts','App\Http\Controllers\adminController@allPosts');

Route::get('editpost/{id}','App\Http\Controllers\adminController@editPost');

Route::Post('updatepost/{id}','App\Http\Controllers\crudController@updateData');

