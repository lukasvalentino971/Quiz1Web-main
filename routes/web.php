<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FecthBarang;
use App\Http\Controllers\DataTransaction;
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

Route::get('/', function () 
{
    return view('penting.main');
});
// create database
// make controller
// link controller to the route

route::get('/table',[DataTransaction::class, 'index']);
