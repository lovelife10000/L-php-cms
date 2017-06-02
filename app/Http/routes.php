<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
  return view('welcome');
});
Route::get('/admin/manage', function () {
  return view('admin.basic_info');
});




/*
 * 用户组
 * */
Route::group(['namespace' => 'Admin'], function () {

  Route::get('/admin/manage/admin_user_group_add','adminUserAllController@showProfile')->name('admin.admin_user_group_add');

  Route::get('/admin/manage/admin_user_group_all', function () {
    return view('admin.admin_user_group_all');
  });
});



/*
 * 用户
 * */
Route::group(['middleware' => 'auth'], function () {

  Route::get('/admin/manage/admin_user_all', function () {
    return view('admin.admin_user_all');
  });

  Route::get('/admin/manage/admin_user_add', function () {
    return view('admin.admin_user_all');
  });
});