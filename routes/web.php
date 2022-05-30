<?php

use App\Http\Controllers\PublishMessageController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/first-tab', function () {
    return view('input');
});

Route::post('/publish-message', PublishMessageController::class);

Route::get('/second-tab', function () {
    return view('output');
});
