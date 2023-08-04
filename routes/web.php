<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/new-tour', [TourController::class, 'new_tour'])->name('new-tour');
Route::post('tour-save', [TourController::class, 'tour_save'])->name('tour-save');
Route::get('/all-tour', [TourController::class, 'all_tour'])->name('all-tour');
Route::get('/tour-edit/{id}', [TourController::class, 'tour_edit'])->name('tour-edit');
Route::post('tour-update', [TourController::class, 'tour_update'])->name('tour-update');
Route::get('/tour-delete/{id}', [TourController::class, 'tour_delete'])->name('tour-delete');


Route::get('/new-tour-type', [TourController::class, 'new_tour_type'])->name('new-tour-type');
Route::post('tour-type-save', [TourController::class, 'tour_type_save'])->name('tour-type-save');
Route::get('/tour-type', [TourController::class, 'tour_type'])->name('tour-type');
Route::get('/tour-type-edit/{id}', [TourController::class, 'tour_type_edit'])->name('tour-type-edit');
Route::post('tour-type-update', [TourController::class, 'tour_type_update'])->name('tour-type-update');
Route::get('tour-type-delete/{id}', [TourController::class, 'tour_type_delete'])->name('tour-type-delete');


Route::get('/new-user', [UserController::class, 'new_user'])->name('new-user');
Route::post('user-save', [UserController::class, 'user_save'])->name('user-save');
Route::get('/user-list', [UserController::class, 'user_list'])->name('user-list');

Route::get('/user-edit/{id}', [UserController::class, 'user_edit'])->name('user-edit');

Route::post('/user-update', [UserController::class, 'user_update'])->name('user-update');

Route::get('/user-delete/{id}', [UserController::class, 'user_delete'])->name('user-delete');


Route::get('/logout', [UserController::class, 'logout'])->name('logout');


