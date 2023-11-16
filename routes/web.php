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

Route::get('/', function () {
    $title = 'Home';
    $parag = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae laboriosam nobis, distinctio nulla atque sequi aliquam ut consectetur veniam quasi fugit at magni est inventore rerum quae doloribus recusandae accusantium.';
    return view('home', compact('title','parag'));
});

Route::get('/about', function () {
    $title = 'About';
    $parag = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae laboriosam nobis, distinctio nulla atque sequi aliquam ut consectetur veniam quasi fugit at magni est inventore rerum quae doloribus recusandae accusantium.';
    return view('about', compact('title','parag'));
});
