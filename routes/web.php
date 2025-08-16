<?php
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Usersconroller;

Route::get('/test', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('/', function () {
    return view('index');
});





//Route::get('/test', function () {
  //  return view('app');
//});

//Route::get('/users', function () 
 // return Inertia::render('users/sh');
//})->middleware(['auth', 'verified']);

Route::get('/users', [Usersconroller::class, 'show']);

//Route::get('/users', function () {
  // return User::select('id', 'name', 'email')->get();
//});




//Route::get('dashboard', function () {
  ////})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
