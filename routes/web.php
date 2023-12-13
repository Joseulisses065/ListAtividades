<?php

use App\Http\Controllers\ActivitesController;
use App\Http\Controllers\UserController;
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


Route::get('/',[UserController::class,'index'])->name('user.index');

Route::get('/login', [UserController::class,'index'])->name('user.index');

Route::get('/create', [UserController::class,'edit'])->name('user.edit');

Route::post('/create/store', [UserController::class,'store'])->name('user.store');

Route::post('/login/show', [UserController::class,'show'])->name('user.show');

Route::get('/logout', [UserController::class,'destroy'])->name('user.destroy');



Route::group(['middleware'=>'auth'],function(){
Route::resource('/activites',ActivitesController::class)->except('index');
Route::get('/{user}/activites',[ActivitesController::class,'index'])->name('activites.index');

});

