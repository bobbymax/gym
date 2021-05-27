<?php

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
    return view('layouts.home');
});

Route::get('/fronter', 'MemberController@excelAdd');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('dashboard')->group(function() {
    Route::resource('users', 'MemberController');
    Route::resource('users/{user}/attestations', 'AttestationController');
    Route::resource('users/{user}/medicals', 'MedicalController');

    Route::get('/', 'DashboardController@index');
});
