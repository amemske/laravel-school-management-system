<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

Route::controller(AdminController::class)->group(function() {
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
});


Route::controller(UserController::class)->group(function() {
    Route::get('/user/view', 'userView')->name('user.view');
    Route::get('/user/add', 'addUser')->name('user.add');
    Route::post('/store', 'storeUser')->name('user.store');
    Route::get('/user/edit/{id}', 'editUser')->name('user.edit');
    Route::post('/user/update/{id}', 'updateUser')->name('user.update');
    Route::get('/user/delete/{id}', 'deleteUser')->name('user.delete');
});

Route::controller(ProfileController::class)->group(function() {
    Route::get('/profile/view', 'viewProfile')->name('profile.view');
    Route::get('/profile/edit/', 'editProfile')->name('profile.edit');
    Route::post('/profile/store/', 'storeProfile')->name('profile.store');
});
