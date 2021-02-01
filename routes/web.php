<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AccessManageController;
use App\Http\Controllers\AuthManageController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\MagangController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;


Auth::routes();
// });
// Route::get('/home', 'HomeController@index')->name('home');	


// Route::get('/login', 'AuthManageController@viewLogin')->name('login');
// Route::post('/verify_login', 'AuthManageController@verifyLogin');
// Route::post('/first_account', 'UserManageController@firstAccount');

// Route::group(['middleware' => ['auth', 'checkRole:admin,user']], function(){
Route::group(['middleware' => ['auth']], function(){

	// Route::get('/', function () {
	// 	return view('pages.index');
	// });
	// main
	Route::get('/', 'MainController@index')->name('dashboard.index');
	Route::get('/dashboard', 'MainController@index')->name('dashboard.index');
	//logout
	Route::get('/logout', 'AuthManageController@logoutProcess');

	// ------------------------- Fitur Cari -------------------------
	Route::get('/search/{word}', 'SearchManageController@searchPage');
	
	// ------------------------- Profile -------------------------
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
	
	// ------------------------- Kelola Division -------------------------
	// > Division
//Get Requests
	Route::get("/division",'DivisionController@index')->name('division.index');
	Route::get("/division/edit/{id}",'DivisionController@edit')->name('division.edit');
	Route::get("/division/show/{id}",'DivisionController@show')->name('division.show');
	//Post Requests
	Route::post("/division",'DivisionController@store')->name('division.index');
	Route::post("/division/edit/{id}",'DivisionController@update_record')->name('division.edit');
	// Delete Request
	Route::delete("/division/delete/{id}",'DivisionController@destroy')->name('division.delete');

	// ------------------------- Kelola Project -------------------------
	// > Project
	// Get Request
	Route::get("/project",'ProjectController@index')->name('project.index');
	Route::get("/project/create",'ProjectController@create')->name('project.create');
	Route::get("/project/edit/{id}","ProjectController@edit")->name("project.edit");
	Route::get("/project/show/{id}","ProjectController@show")->name("project.show");
	//Post Request
	Route::post("/project/create","ProjectController@store");
	Route::post("/project/edit/{id}","ProjectController@update_record")->name("project.edit");
	// Route::post("/project/pay/{id}","PaymentReportController@create");
	// Delete
	Route::delete("/project/delete/{id}","ProjectController@destroy")->name("project.delete");
	// End of karyawan
	// ------------------------- Kelola Karyawan -------------------------
	// > Karyawan
	// Get Request
	Route::get("/karyawan",'KaryawanController@index')->name('karyawan.index');
	Route::get("/karyawan/create",'KaryawanController@create')->name('karyawan.create');
	Route::get("/karyawan/edit/{id}",'KaryawanController@edit')->name("karyawan.edit");
	Route::get("/karyawan/show/{id}",'KaryawanController@show')->name("karyawan.show");
	//Post Request
	Route::post("/karyawan/create",'KaryawanController@store');
	Route::post("/karyawan/edit/{id}",'KaryawanController@update_record')->name("karyawan.edit");
	// Route::post("/karyawan/pay/{id}",'PaymentReportController@create');
	// Delete
	Route::delete("/karyawan/delete/{id}",'KaryawanController@destroy')->name("karyawan.delete");
	// End of karyawan

	// ------------------------- Kelola Magang -------------------------
	// > Magang
	// Get Request
	Route::get("/magang",'MagangController@index')->name('magang.index');
	Route::get("/magang/create",'MagangController@create')->name('magang.create');
	Route::get("/magang/edit/{id}",'MagangController@edit')->name("magang.edit");
	Route::get("/magang/show/{id}",'MagangController@show')->name("magang.show");
	//Post Request
	Route::post("/magang/create",'MagangController@store');
	Route::post("/magang/edit/{id}",'MagangController@update_record')->name("magang.edit");
	// Route::post("/magang/pay/{id}",'PaymentReportController@create');
	// Delete
	Route::delete("/magang/delete/{id}",'MagangController@destroy')->name("magang.delete");
	// End of magang
});

// Route::get('user', function(){
// 	dd(Auth::user());

// 	// return dd("Masuk");
// });