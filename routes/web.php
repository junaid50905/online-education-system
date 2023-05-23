<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DepartmentController;
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
    return view('welcome');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});


Route::get('/admin/dashboard/department/create', [DepartmentController::class, 'showCreateForm'])->name('admin.deshboard.create');


/*----------------- Admin Routes Start -------------------*/

/*----------------- Admin Routes End -------------------*/

