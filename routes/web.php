<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.home');
})->name('welcome');

Route::get('/fronter', 'MemberController@excelAdd');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('dashboard')->group(function() {
    Route::get('users/{user}/attendance/create', 'AttendanceController@create')->name('attendances.create');
    Route::post('users/{user}/attendances', 'AttendanceController@store')->name('attendances.store');
    Route::resource('users', 'MemberController');
    Route::resource('users/{user}/attestations', 'AttestationController');
    Route::resource('users/{user}/medicals', 'MedicalController');

    Route::get('/', 'DashboardController@index');
});
