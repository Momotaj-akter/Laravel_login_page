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



require 'admin.php';
Route::group(['prefix'  =>  'admin'], function () {
 
    Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login')->name('admin.login.post');
    Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');
 
    Route::group(['middleware' => ['auth:admin']], function () {
 
        Route::get('/', function () {
            return view('admin.dashboard.index');
           })->name('admin.dashboard');
 
    });
});








// Route::get('/', function () {
//     return view('welcome');
// });
// Route::view('/admin', 'admin.dashboard.index');

// Route::view('/bootstrap-components', 'admin.dashboard.bootstrap-components');
// Route::view('/widgets', 'admin.dashboard.widgets');

// Route::view('/form-components', 'admin.dashboard.form-components');
// Route::view('/form-custom', 'admin.dashboard.form-custom');
// Route::view('/form-samples', 'admin.dashboard.form-samples');
// Route::view('/form-notifications', 'admin.dashboard.form-notifications');

// Route::view('/table-data-table', 'admin.dashboard.table-data-table');
// Route::view('/table-basic', 'admin.dashboard.table-basic');

// Route::view('/ui-cards', 'admin.dashboard.ui-cards');
// Route::view('/charts', 'admin.dashboard.charts');

// Route::view('/page-mailbox', 'admin.dashboard.page-mailbox');
// Route::view('/blank-pase', 'admin.dashboard.blank-pase');
// Route::view('/page-lockscreen', 'admin.dashboard.page-lockscreen');
// Route::view('/page-invoice', 'admin.dashboard.page-invoice');
// Route::view('/page-error', 'admin.dashboard.page-error');
// Route::view('/page-login', 'admin.dashboard.page-login');
// Route::view('/page-calendar', 'admin.dashboard.page-calendar');
// Route::view('/page-user', 'admin.dashboard.page-user');

// Route::view('/index-2', 'admin.dashboard.index-2');

//user
// Route::view('/user', 'user.pages.index');
// Route::get('/usersds', function () {
//     return view('user.pages.index');
//  });
// Route::get('/register', function () {
// return view('user.pages.register');
// });
// Route::get('/cart', function () {
// return view('user.pages.cart');
// });
// Route::get('/catalog-list-page', function () {
// return view('user.pages.catalog-list-page');
// });
// Route::get('/checkout', function () {
// return view('user.pages.checkout');
// });

// Route::get('/product-detail', function () {
// return view('user.pages.product-detail');
// });

 