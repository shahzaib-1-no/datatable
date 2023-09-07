<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\addcontroller;

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
    return view('add_data');
});

Route::post('save_data',[addcontroller::class,'save_data_fun']);
Route::get('show',[addcontroller::class,'show_fun']);
Route::get('show',[addcontroller::class,'show_fun']);
Route::get('/delete/{id}',[addcontroller::class,'delete_fun']);
Route::get('/update/{id}',[addcontroller::class,'update_fun']);
Route::any('/update_data_page/{id}',[addcontroller::class,'update_data_page_fun']);
