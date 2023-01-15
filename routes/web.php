<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;

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

//PageController per pagine statiche
Route::get('/', [PageController::class, 'index'])->name('comics');
Route::get('/characters', [PageController::class, 'characters'])->name('characters');
Route::get('/movies', [PageController::class, 'movies'])->name('movies');
Route::get('/tv', [PageController::class, 'tv'])->name('tv');
Route::get('/games', [PageController::class, 'games'])->name('games');
Route::get('/collectibles', [PageController::class, 'collectibles'])->name('collectibles');
Route::get('/videos', [PageController::class, 'videos'])->name('videos');
Route::get('/fan', [PageController::class, 'fan'])->name('fan');
Route::get('/shop', [PageController::class, 'shop'])->name('shop');