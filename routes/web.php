<?php

use Illuminate\Support\Facades\Route;

// Auth::routes();

// Route::get('/', function () {
// 		return view('users.pages.index');
// });

// });
Route::get('/home', 'HomeController@index')->name('home');
	
Route::get('/login', 'AuthManageController@viewLogin')->name('login');
Route::post('/verify_login', 'AuthManageController@verifyLogin');
Route::post('/first_account', 'UserManageController@firstAccount');

// Route::group(['middleware' => ['auth', 'checkRole:admin,user']], function(){
Route::group(['middleware' => ['auth']], function(){
	// main

	Route::get('/', 'MainController@beranda');
	Route::get('/dashboard', 'MainController@beranda');
	Route::get('/division', 'MainController@division');
	Route::get('/karyawan', 'MainController@karyawan');
	Route::get('/magang', 'MainController@magang');
	Route::get('/project', 'MainController@project');

	Route::get('/logout', 'AuthManageController@logoutProcess');
	// Route::get('/', 'ViewManageController@viewDashboard');
	// Route::get('/dashboard/chart/{filter}', 'ViewManageController@filterChartDashboard');
	// Route::post('/market/update', 'ViewManageController@updateMarket');
	// ------------------------- Fitur Cari -------------------------
	Route::get('/search/{word}', 'SearchManageController@searchPage');
	
	// ------------------------- Profil -------------------------
	Route::get('/profile', 'ProfileManageController@viewProfile');
	Route::post('/profile/update/data', 'ProfileManageController@changeData');
	Route::post('/profile/update/password', 'ProfileManageController@changePassword');
	Route::post('/profile/update/picture', 'ProfileManageController@changePicture');
	
	// ------------------------- Kelola Akun -------------------------
	// > Akun
	Route::get('/account', 'UserManageController@viewAccount');
	Route::get('/account/new', 'UserManageController@viewNewAccount');
	Route::post('/account/create', 'UserManageController@createAccount');
	Route::get('/account/edit/{id}', 'UserManageController@editAccount');
	Route::post('/account/update', 'UserManageController@updateAccount');
	Route::get('/account/delete/{id}', 'UserManageController@deleteAccount');
	Route::get('/account/filter/{id}', 'UserManageController@filterTable');
	// > Akses
	Route::get('/access', 'AccessManageController@viewAccess');
	Route::get('/access/change/{user}/{access}', 'AccessManageController@changeAccess');
	Route::get('/access/check/{user}', 'AccessManageController@checkAccess');
	Route::get('/access/sidebar', 'AccessManageController@sidebarRefresh');
	
	// ------------------------- Kelola Project -------------------------
	// > Project
	// Route::get('/product', 'ProductManageController@viewProduct');
	// Route::get('/product/new', 'ProductManageController@viewNewProduct');
	// Route::post('/product/create', 'ProductManageController@createProduct');
	// Route::post('/product/import', 'ProductManageController@importProduct');
	// Route::get('/product/edit/{id}', 'ProductManageController@editProduct');
	// Route::post('/product/update', 'ProductManageController@updateProduct');
	// Route::get('/product/delete/{id}', 'ProductManageController@deleteProduct');
	// Route::get('/product/filter/{id}', 'ProductManageController@filterTable');

	// ------------------------- Kelola Laporan -------------------------
	// Route::get('/report/transaction', 'ReportManageController@reportTransaction');
	// Route::post('/report/transaction/filter', 'ReportManageController@filterTransaction');
	// Route::get('/report/transaction/chart/{id}', 'ReportManageController@chartTransaction');
	// Route::post('/report/transaction/export', 'ReportManageController@exportTransaction');
	// Route::get('/report/workers', 'ReportManageController@reportWorker');
	// Route::get('/report/workers/filter/{id}', 'ReportManageController@filterWorker');
	// Route::get('/report/workers/detail/{id}', 'ReportManageController@detailWorker');
	// Route::post('/report/workers/export/{id}', 'ReportManageController@exportWorker');

	// ------------------------- Kelola Karyawan -------------------------
	// Route::get('/product', 'ProductManageController@viewProduct');
	// Route::get('/product/new', 'ProductManageController@viewNewProduct');
	// Route::post('/product/create', 'ProductManageController@createProduct');
	// Route::post('/product/import', 'ProductManageController@importProduct');
	// Route::get('/product/edit/{id}', 'ProductManageController@editProduct');
	// Route::post('/product/update', 'ProductManageController@updateProduct');
	// Route::get('/product/delete/{id}', 'ProductManageController@deleteProduct');
	// Route::get('/product/filter/{id}', 'ProductManageController@filterTable');
	
	// ------------------------- Kelola Magang -------------------------
	// Route::get('/product', 'ProductManageController@viewProduct');
	// Route::get('/product/new', 'ProductManageController@viewNewProduct');
	// Route::post('/product/create', 'ProductManageController@createProduct');
	// Route::post('/product/import', 'ProductManageController@importProduct');
	// Route::get('/product/edit/{id}', 'ProductManageController@editProduct');
	// Route::post('/product/update', 'ProductManageController@updateProduct');
	// Route::get('/product/delete/{id}', 'ProductManageController@deleteProduct');
	// Route::get('/product/filter/{id}', 'ProductManageController@filterTable');

});

// Route::get('user', function(){
// 	dd(Auth::user());

// 	// return dd("Masuk");
// });