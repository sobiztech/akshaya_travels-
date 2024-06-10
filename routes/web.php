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

// pages
Route::get('/', function () {
    return view('pages.index');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/sabarimalai', function () {
    return view('pages.sabarimalai');
});

Route::get('/airlineticket', function () {
    return view('pages.airlineticket');
});

Route::get('/parcel', function () {
    return view('pages.parcel');
});

Route::get('/transport', function () {
    return view('pages.transport');
});

Route::get('/visa', function () {
    return view('pages.visa');
});

Route::get('/event', function () {
    return view('pages.event');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

// form
Route::get('/airlineticketreservationform', function () {
    return view('forms.airlineticketreservationform');
});

Route::get('/parcelreservationform', function () {
    return view('forms.parcelreservationform');
});

Route::get('/visaformreservationform', function () {
    return view('forms.transportreservationform');
});

Route::get('/visareservationform', function () {
    return view('forms.visareservationform');
});

Route::get('/sabarimalaireservationform', function () {
    return view('forms.sabarimalaireservationform');
});




