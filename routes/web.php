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
    return view('pages.home', ['title' => 'Bliss | Home']);
});
Route::get('/appointment', function () {
    return view('pages.appointment', ['title' => 'Bliss | Appointment']);
});
Route::get('/service', function () {
    return view('pages.service', ['title' => 'Bliss | Service']);
});
Route::get('/priceing', function () {
    return view('pages.priceing', ['title' => 'Bliss | Priceing']);
});
Route::get('/blog', function () {
    return view('pages.blog', ['title' => 'Bliss | Blog']);
});
Route::get('/about', function () {
    return view('pages.about', ['title' => 'Bliss | About']);
});
Route::get('/customers', function () {
    return view('pages.customers', ['title' => 'Bliss | Customers']);
});
Route::get('/contact', function () {
    return view('pages.contact', ['title' => 'Bliss | Contact Me']);
});
