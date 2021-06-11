<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\AuthorsController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::resource('blogs', BlogsController::class);
Route::resource('authors', AuthorsController::class);










Route::get('/supersecret', function (){
    return 'this is a secret page';
})->middleware(['auth']); // zorgt er voor dat alleen gebruikers hier mogen komen die zijn ingelogd door de middleware.


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    return 'This is all protected';
}); // groep functie om alle routes in de group te protected.


require __DIR__.'/auth.php';
