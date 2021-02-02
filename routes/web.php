<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;

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

    // Change Language route
    Route::get('/lang/{local}', [TodoController::class, 'changeLocal']);
    
    // Main page route view
    Route::get('/', function () {
        return view('livewire.home-page');
    });

    
    Auth::routes();
    
    // Home page route.
    Route::get('/home', [HomeController::class, 'index'])->name('home');
