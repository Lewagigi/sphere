<?php
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/test', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('/', function () {
    return view('index');
});

//Route::get('/test', function () {
  //  return view('app');
//});

Route::get('/users', function () {
    return Inertia::render('Users');
})->middleware(['auth', 'verified']);





//Route::get('/users', function () {
  //  return User::select('id', 'name', 'email')->get();
//});




Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
