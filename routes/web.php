<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FacilitatorController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');


Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::get('/admin/add/student', [AdminController::class, 'showAddStudentForm'])->name('admin.add.student');
Route::get('/admin/add/facilitator', [AdminController::class, 'showAddFacilitatorForm'])->name('admin.add.facilitator');
Route::post('/admin/store/student', [AdminController::class, 'storeStudent'])->name('admin.store.student');
Route::post('/admin/store/facilitator', [AdminController::class, 'storeFacilitator'])->name('admin.store.facilitator');
Route::get('/admin/edit/student/{id}', [AdminController::class, 'editStudent'])->name('admin.edit.student');
Route::put('/admin/update/student/{id}', [AdminController::class, 'updateStudent'])->name('admin.update.student');
Route::delete('/admin/delete/student/{id}', [AdminController::class, 'deleteStudent'])->name('admin.delete.student');

Route::get('/admin/edit/facilitator/{id}', [AdminController::class, 'editFacilitator'])->name('admin.edit.facilitator');
Route::put('/admin/update/facilitator/{id}', [AdminController::class, 'updateFacilitator'])->name('admin.update.facilitator');
Route::delete('/admin/delete/facilitator/{id}', [AdminController::class, 'deleteFacilitator'])->name('admin.delete.facilitator');

Route::get('/facilitator/login', [FacilitatorController::class, 'showLoginForm'])->name('facilitator.login');
Route::post('/facilitator/login', [FacilitatorController::class, 'login'])->name('facilitator.login.submit');
Route::get('/facilitator/dashboard', [FacilitatorController::class, 'dashboard'])->name('facilitator.dashboard');
Route::post('/facilitator/logout', [FacilitatorController::class, 'logout'])->name('facilitator.logout');


Route::get('/user/login', [UserController::class, 'showLoginForm'])->name('user.login');
Route::post('/user/login', [UserController::class, 'login'])->name('user.login.submit');
Route::post('/user/logout', [UserController::class, 'logout'])->name('user.logout');
Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
Route::post('/user/time-in', [UserController::class, 'timeIn'])->name('user.timein');
Route::post('/user/time-out', [UserController::class, 'timeOut'])->name('user.timeout');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
