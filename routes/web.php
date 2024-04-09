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

    $cards = config("db.cards");
    $links = config("db.linkList");
    $socials = config("db.socials");

    // dd($cards);
    // dd($links);
    // dd($socials);

    return view('home', compact('cards','links','socials'));
})->name('home');
