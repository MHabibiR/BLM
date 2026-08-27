<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AspirationController;
use App\Http\Controllers\EvaluationLogController;

Route::get('/', function () {
    return view('landing');
});

Route::get('/student', function () {
    return view('student');
});

Route::get('/bem', function () {
    return view('bem');
});

Route::get('/blm', function () {
    return view('blm');
});

Route::prefix('student')->name('student.')->group(function () {
    Route::resource('aspirations', AspirationController::class);
});

Route::prefix('bem')->name('bem.')->group(function () {
    Route::resource('programs', ProgramController::class);
});

Route::prefix('blm')->name('blm.')->group(function () {
    Route::resource('aspirations', AspirationController::class);
    Route::resource('evaluation-logs', EvaluationLogController::class);
});
