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

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index');
    //category
    Route::get('/categories', 'CategoriesController@index')->name('categories');
    Route::get('/add_categories', 'CategoriesController@add')->name('addCategories');
    Route::post('/add_submit_categories', 'CategoriesController@store')->name('addSubmitCategories');
    Route::get('/edit_categories/{id}', 'CategoriesController@edit')->name('editCategories');
    Route::post('/edit_submit_categories/{id}', 'CategoriesController@update')->name('editSubmitCategories');
    Route::get('/delete_categories/{id}', 'CategoriesController@delete')->name('deleteCategories');
    //post
    Route::get('/posts', 'PostsController@index')->name('posts');
    Route::get('/add_post', 'PostsController@add')->name('addPost');
    Route::post('/add_submit_post', 'PostsController@store')->name('addSubmitPost');
    Route::get('/edit_post/{id}', 'PostsController@edit')->name('editPost');
    Route::post('/edit_submit_post/{id}', 'PostsController@update')->name('editSubmitPost');
    Route::get('/delete_post/{id}', 'PostsController@delete')->name('deletePost');
});
