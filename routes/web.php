<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailerController;

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
    return view('index');
})->name('home');

Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');
Route::post('/sendmail', [MailerController::class,'sendRequest'])->name('mail');
