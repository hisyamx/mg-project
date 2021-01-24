<?php

use Illuminate\Support\Facades\Route;

// Auth::routes();

// Route::get('/', function () {
// 		return view('users.pages.index');
// });

// });
// Route::get('/home', 'HomeController@index')->name('home');
	
Route::get('/login', 'AuthManageController@viewLogin')->name('login');
Route::post('/verify_login', 'AuthManageController@verifyLogin');
Route::post('/first_account', 'UserManageController@firstAccount');

// Route::group(['middleware' => ['auth', 'checkRole:admin,user']], function(){
Route::group(['middleware' => ['auth']], function(){

	// main
	Route::get('/', 'MainController@index')->name('dashboard.index');
	Route::get('/dashboard', 'MainController@index')->name('dashboard.index');
	// Route::get('/division', 'MainController@division');
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
	// Route::get('/account', 'UserManageController@viewAccount');
	// Route::get('/account/new', 'UserManageController@viewNewAccount');
	// Route::post('/account/create', 'UserManageController@createAccount');
	// Route::get('/account/edit/{id}', 'UserManageController@editAccount');
	// Route::post('/account/update', 'UserManageController@updateAccount');
	// Route::get('/account/delete/{id}', 'UserManageController@deleteAccount');
	// Route::get('/account/filter/{id}', 'UserManageController@filterTable');
	
	// ------------------------- Kelola Division -------------------------
	// > Division
//Get Requests
	Route::get("/division",'DivisionController@index')->name('division.division');
	Route::get("/division/edit/{id}",'DivisionController@edit')->name('division.add');
	Route::get("/division/delete/{id}",'DivisionController@show')->name('division.edit');
	//Post Requests
	Route::post("/division",'DivisionController@store')->name('division.division');
	Route::post("/division/edit/{id}",'DivisionController@update_record')->name('division.add');
	// Delete Request
	Route::delete("/division/delete/{id}",'DivisionController@destroy');

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

	// ------------------------- Kelola Karyawan -------------------------
	// > Karyawan
	// Get Request
	Route::get("/karyawan",'KaryawanController@index')->name('karyawan.karyawan');
	Route::get("/karyawan/create",'KaryawanController@create')->name('karyawan.create');
	Route::get("/karyawan/single/{id}","KaryawanController@single")->name("karyawan.single");
	Route::get("/karyawan/edit/{id}","KaryawanController@edit")->name("karyawan.edit");
	Route::get("/karyawan/delete/{id}","KaryawanController@show")->name("karyawan.delete");
	Route::get("/karyawan/pay/{id}","KaryawanController@pay")->name("karyawan.pay");
	//Post Request
	Route::post("/karyawan/create","KaryawanController@store");
	Route::post("/karyawan/edit/{id}","KaryawanController@update_record")->name("karyawan.edit");
	// Route::post("/karyawan/pay/{id}","PaymentReportController@create");
	// Delete
	Route::delete("/karyawan/delete/{id}","KaryawanController@destroy");
	// End of karyawan

	// ------------------------- Kelola Magang -------------------------
	// > Magang
	// Get Request
	Route::get("/magang",'MagangController@index')->name('magang.magang');
	Route::get("/magang/create",'MagangController@create')->name('magang.create');
	Route::get("/magang/single/{id}","MagangController@single")->name("magang.single");
	Route::get("/magang/edit/{id}","MagangController@edit")->name("magang.edit");
	Route::get("/magang/delete/{id}","MagangController@show")->name("magang.delete");
	Route::get("/magang/pay/{id}","MagangController@pay")->name("magang.pay");
	//Post Request
	Route::post("/magang/create","MagangController@store");
	Route::post("/magang/edit/{id}","MagangController@update_record")->name("magang.edit");
	// Route::post("/magang/pay/{id}","PaymentReportController@create");
	// Delete
	Route::delete("/magang/delete/{id}","MagangController@destroy");
	// End of magang
});

// Route::get('user', function(){
// 	dd(Auth::user());

// 	// return dd("Masuk");
// });