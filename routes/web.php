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

Route::get('/home', function () {
    $name = 'Roberto';
    $surname = 'Latini';
    return view('home', compact('name', 'surname'));
})->name('home');

Route::get('/about', function () {
    $name = 'Roberto';
    $surname = 'Latini';
    return view('about', compact('name', 'surname'));
})->name('about');

Route::get('/contacts', function () {
    $name = 'Roberto';
    $surname = 'Latini';
    return view('contacts', compact('name', 'surname'));
})->name('contacts');

