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


Route::get('/','blogControll@index');

//dashboard route

Route::get('login-ui','dashoboardControll@login_ui');
Route::get('dashboard','dashoboardControll@index');
Route::get('create-post','dashoboardControll@create_new_post_ui');
Route::get('user-table','dashoboardControll@all_user');
Route::get('blogs','dashoboardControll@all_blog');
Route::get('category','dashoboardControll@category');
Route::post('create-category','dashoboardControll@create_category');

Route::post('add-new-post','dashoboardControll@add_new_post');

//edit post
//Route::post('edit-post/{id}','dashoboardControll@delete_post');
Route::get('delete-post/{id}','dashoboardControll@delete_post');
Route::get('edit-post/{id}','dashoboardControll@edit_post');
Route::post('update-post','dashoboardControll@update_post');


Route::get('published-post','dashoboardControll@view_published_post');
Route::get('draft','dashoboardControll@view_draft_post');
Route::get('trash','dashoboardControll@view_deleted_post');

Route::get('published/{id}','dashoboardControll@edit_published_status');
Route::get('unpublished/{id}','dashoboardControll@edit_unpublished_status');
Route::get('permanent-delete/{id}','dashoboardControll@permanent_delete');
Route::get('undo-post/{id}','dashoboardControll@undo_post');

//category
Route::get('categoryEdit/{id}','dashoboardControll@category_edit');
Route::get('categoryDelete/{id}','dashoboardControll@category_delete');
Route::get('active/{id}','dashoboardControll@active_category');
Route::get('unactivated/{id}','dashoboardControll@unactivated_category');

// single bloge page

Route::get('single-blog/{id}','blogControll@single_blog');
