<?php

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
Route::get('unused', function () {return view('unused');});
Route::get('testing', [\App\Http\Controllers\TestingController::class, 'index']);
Route::get('test2', \App\Http\Livewire\Testing\SecondExample::class);

/* Perfect header footer with progress bar */
Route::get('test', \App\Http\Livewire\Testing\ExampleLivewire::class);

Route::get('/', function () {return view('welcome');})->name('index');
Route::get('survey', \App\Http\Livewire\Questionnaire::class)->name('survey');

/* TESTING GROUND */
Route::get('test-ui', \App\Http\Livewire\Testing\BasicForm::class);
Route::get('main', \App\Http\Livewire\Testing\BackFront::class);
