<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UsersController;
 

Route::get('/', function () {
    return view('admin.login');
});

Route::get('/scanner', function(){
    return view('admin.scanner');
});

Route::get('/update-form', function(){
    return view('admin.profile');
});

Route::get('/dashboard', [UsersController::Class , 'dashboard'])->middleware('checkLogin');

Route::get('/login/page', [UsersController::Class, 'login_page']);
Route::get('/register/page',[UsersController::Class, 'register_page']);  
Route::post('/login', [UsersController::Class, 'login'])->name('login');
Route::post('/register', [UsersController::Class, 'register'])->name('register'); 
Route::post('/upload', [UploadController::Class,'store']);  
Route::get('/logout',[UsersController::Class, 'logout']);
Route::get('/user/list',[UsersController::Class, 'user_list']);
Route::get('/user/data', [UsersController::Class, 'get_user_data']);
Route::get('/edit/profile/{id}', [UsersController::Class, 'edit_profile'])->name('edit.profile');
Route::post('/update/profile',[UsersController::class, 'update_profile']);


