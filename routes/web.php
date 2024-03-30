<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;


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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/user', [HomeController::class, 'user'])->name('user');
Route::get('/employees/define', [EmployeeController::class, 'define'])->name('define');
Route::get('/create',[EmployeeController::class, 'add'])->name('create');
Route::post('/store',[EmployeeController::class, 'store'])->name('store');
Route::get('/edit/{id}',[EmployeeController::class, 'edit'])->name('edit');
Route::put('/update/{id}',[EmployeeController::class, 'update'])->name('update');
Route::delete('/delete/{id}',[EmployeeController::class, 'delete'])->name('delete');




