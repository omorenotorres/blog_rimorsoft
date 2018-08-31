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

Route::redirect('/', 'blog');

Auth::routes();

//Route web
//web.blog
Route::get('blog', 'Web\PageController@blog')->name('blog');
//web.post
Route::get('post/{slug}', 'Web\PageController@post')->name('post');
//web.category.
Route::get('category/{slug}', 'Web\PageController@category')->name('category');
//web.tag
Route::get('tag/{slug}', 'Web\PageController@tag')->name('tag');
//Final Route web

//Administracion
//tags
Route::resource('tags', 'Admin\TagController');
//categories
Route::resource('categories', 'Admin\CategoryController');
//posts
Route::resource('posts', 'Admin\PostController');