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
    //db(nome_del_file).comics(chiave_dell'array)
    //dd(config('db.comics'));
    $comics = config('db.comics');
    //aggiungo compact al return per accedere alla variabile
     return view('comics', compact('comics'));
 })->name('comics');


Route::get('/characters', function () {
    return view('characters');
 })->name('characters');
 
 Route::get('/movies', function () {
    return view('movies');
 })->name('movies');
 
 Route::get('/tv', function () {
    return view('tv');
 })->name('tv');
 
 Route::get('/games', function () {
    return view('games');
 })->name('games');
 
 Route::get('/collectibles', function () {
    return view('collectibles');
 })->name('collectibles');
 
 Route::get('/videos', function () {
    return view('videos');
 })->name('videos');
 
 Route::get('/fan', function () {
    return view('fan');
 })->name('fan');
 
 Route::get('/shop', function () {
    return view('shop');
 })->name('shop');