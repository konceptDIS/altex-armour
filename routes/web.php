<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('index');
}) ->name('index');

Route::get('/about', function () {
    return view('about');
}) ->name('about');

Route::get('/armour', function () {
    return view('armour');
}) ->name('armour');

Route::get('/contact', function () {
    return view('contact');
}) ->name('contact');
Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');


Route::get('/team', function () {
    return view('team');
}) ->name('team');

Route::get('/gallery', function () {
    return view('gallery');
}) ->name('gallery');
