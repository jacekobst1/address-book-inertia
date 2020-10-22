<?php

use App\Http\Controllers\SubscriberController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('/subscribers')->group(function() {
    Route::get('/',                 [SubscriberController::class, 'index']);
    Route::get('/add',              [SubscriberController::class, 'create']);
    Route::post('/',                [SubscriberController::class, 'store']);
    Route::get('/{subscriber}',     [SubscriberController::class, 'edit']);
    Route::put('/{subscriber}',     [SubscriberController::class, 'update']);

});

