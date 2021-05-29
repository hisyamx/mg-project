<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    return redirect(route('login'));
    // return dump('123');
});
// Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/login', 'AuthManageController@viewLogin')->name('login');
// Route::post('/verify_login', 'AuthManageController@verifyLogin');
// Route::post('/first_account', 'UserManageController@firstAccount');

// Route::group(['middleware' => ['auth', 'checkRole:admin,user']], function(){
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/dashboard', 'Admin\MainController@index')->name('admin.dashboard.index');
    //logout
    // Route::get('/logout', 'AuthManageController@logoutProcess');

    // ------------------------- Fitur Cari -------------------------
    Route::get('/search/{word}', 'SearchManageController@searchPage');

    // ------------------------- Profile -------------------------
    Route::get('/profile', 'ProfileManageController@viewProfile')->name('admin.profile.index');
    Route::post('/profile/update/data', 'ProfileManageController@changeData')->name('admin.profile.edit');
    Route::post('/profile/update/password', 'ProfileManageController@changePassword')->name('admin.profile.password');
    Route::post('/profile/update/picture', 'ProfileManageController@changePicture')->name('admin.profile.picture');

    // ------------------------- Kelola Akun -------------------------
    // > Akun
    Route::get('/account', 'UserManageController@viewAccount')->name('admin.account.index');
    Route::post('/account/create', 'UserManageController@createAccount')->name('admin.account.create');
    Route::post("/account", 'Admin\DivisionController@store');
    Route::get('/account/edit/{id}', 'UserManageController@editAccount')->name('admin.account.edit');
    Route::post('/account/update', 'UserManageController@updateAccount')->name('admin.account.edit');
    Route::get('/account/filter/{id}', 'UserManageController@filterTable')->name('admin.account.filter');
    Route::delete("/account/delete/{id}", 'Admin\DivisionController@destroy')->name('admin.account.delete');

    // ------------------------- Kelola Division -------------------------
    // > Division
    //Get Requests
    Route::get("/division", 'Admin\DivisionController@index')->name('admin.division.index');
    Route::get("/division/create", 'Admin\DivisionController@create')->name('admin.division.create');
    Route::get("/division/edit/{id}", 'Admin\DivisionController@edit')->name('admin.division.edit');
    Route::get("/division/show/{id}", 'Admin\DivisionController@show')->name('admin.division.show');
    //Post Requests
    Route::post("/division", 'Admin\DivisionController@store');
    Route::post("/division/edit/{id}", 'Admin\DivisionController@update_record')->name('admin.division.edit');
    // Delete Request
    Route::delete("/division/delete/{id}", 'Admin\DivisionController@destroy')->name('admin.division.delete');

    // ------------------------- Kelola Project -------------------------
    // > Project
    // Get Request
    Route::get("/project", 'Admin\ProjectController@index')->name('admin.project.index');
    Route::get("/project/timeline", 'Admin\ProjectController@timeline')->name('admin.project.timeline');
    Route::get("/project/create", 'Admin\ProjectController@create')->name('admin.project.create');
    Route::get("/project/edit/{id}", "Admin\ProjectController@edit")->name('admin.project.edit');
    Route::get("/project/show/{id}", "Admin\ProjectController@show")->name('admin.project.show');
    //Post Request
    Route::post("/project/create", "Admin\ProjectController@store");
    Route::post("/project/edit/{id}", "Admin\ProjectController@update_record")->name('admin.project.edit');
    // Route::post("/project/pay/{id}","PaymentReportController@create");
    // Delete
    Route::delete("/project/delete/{id}", "Admin\ProjectController@destroy")->name('admin.project.delete');

    // Custom Action
    Route::get("/project/edit/{project_id}/add/user", "Admin\ProjectController@addUser")->name('admin.project.add.user');
    Route::get("/project/edit/{project_id}/add/user/{user_id}", "Admin\ProjectController@storeUser")->name('admin.project.store.user');
    Route::get("/project/edit/{project_id}/drop/user/{user_id}", "Admin\ProjectController@dropUser")->name('admin.project.drop.user');

    // End of project

    // ------------------------- Kelola Karyawan -------------------------
    // > Karyawan
    // Get Request
    Route::get("/karyawan", 'Admin\KaryawanController@index')->name('admin.karyawan.index');
    Route::get("/karyawan/create", 'Admin\KaryawanController@create')->name('admin.karyawan.create');
    Route::get("/karyawan/edit/{id}", 'Admin\KaryawanController@edit')->name('admin.karyawan.edit');
    Route::get("/karyawan/show/{id}", 'Admin\KaryawanController@show')->name('admin.karyawan.show');
    //Post Request
    Route::post("/karyawan/create", 'Admin\KaryawanController@store');
    Route::post("/karyawan/edit/{id}", 'Admin\KaryawanController@update_record')->name('admin.karyawan.edit');
    // Route::post("/karyawan/pay/{id}",'PaymentReportController@create');
    // Delete
    Route::delete("/karyawan/delete/{id}", 'Admin\KaryawanController@destroy')->name('admin.karyawan.delete');
    // End of karyawan

    // ------------------------- Kelola Magang -------------------------
    // > Magang
    // Get Request
    Route::get("/magang", 'Admin\MagangController@index')->name('admin.magang.index');
    Route::get("/magang/create", 'Admin\MagangController@create')->name('admin.magang.create');
    Route::get("/magang/edit/{id}", 'Admin\MagangController@edit')->name("admin.magang.edit");
    Route::get("/magang/show/{id}", 'Admin\MagangController@show')->name("admin.magang.show");
    //Post Request
    Route::post("/magang/create", 'Admin\MagangController@store');
    Route::post("/magang/edit/{id}", 'Admin\MagangController@update_record')->name("admin.magang.edit");
    // Route::post("/magang/pay/{id}",'PaymentReportController@create');
    // Delete
    Route::delete("/magang/delete/{id}", 'Admin\MagangController@destroy')->name("admin.magang.delete");
    // End of magang

        // ------------------------- Kelola user dashboard -------------------------
    
    // End of user

    // ------------------------- Kelola Akun -------------------------
    // > Akun
    // Route::get('/account', 'UserManageController@viewAccount');
    // Route::get('/account/new', 'UserManageController@viewNewAccount');
    // Route::post('/account/create', 'UserManageController@createAccount');
    // Route::get('/account/edit/{id}', 'UserManageController@editAccount');
    // Route::post('/account/update', 'UserManageController@updateAccount');
    // Route::get('/account/delete/{id}', 'UserManageController@deleteAccount');
    // Route::get('/account/filter/{id}', 'UserManageController@filterTable');
    // > Akses
    // Route::get('/access', 'AccessManageController@viewAccess');
    // Route::get('/access/change/{user}/{access}', 'AccessManageController@changeAccess');
    // Route::get('/access/check/{user}', 'AccessManageController@checkAccess');
    // Route::get('/access/sidebar', 'AccessManageController@sidebarRefresh');
});

Route::group(['prefix' => 'user'], function () {
    // > user
    // Get Request
    Route::get("/dashboard", 'User\MainController@index')->name('user.dashboard.index');
    Route::get("/dashboard/show/{id}", 'User\MainController@show')->name("user.dashboard.show");
    // End of user

    // ------------------------- Kelola user divison -------------------------
    // > user
    // Get Request
    Route::get("/division", 'User\DivisionController@index')->name('user.division.index');
    Route::get("/division/show/{id}", 'User\MainController@show')->name("user.division.show");
    // End of user

    // ------------------------- Kelola user divison -------------------------
    // > user
    // Get Request
    Route::get("/user", 'User\UserController@index')->name('user.user.index');
    Route::get("/user/show/{id}", 'User\MainController@showDivision')->name("user.user.show");
    // End of user

    // ------------------------- Kelola user project -------------------------
    // > user
    // Get Request
    Route::get("/project", 'User\MainController@division')->name('user.project.index');
    Route::get("/project/show/{id}", 'User\MainController@showProject')->name("user.project.show");
    Route::get("/project/timeline", 'User\MainController@showTimeline')->name("user.project.timeline");
});
