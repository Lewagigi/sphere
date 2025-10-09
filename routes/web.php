<?php
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Usersconroller;

//Route::get('/test', function () {
   //// return Inertia::render('Welcome');
//})
//->name('home')
//->middleware('auth');




Route::get('/', function () {
    return view('index');
});

Route::get('/test', [Usersconroller::class, 'we'])
->name('home')->middleware('auth');






Route::get('users', [Usersconroller::class, 'show'])->name('utilisateur')
->middleware('auth');


Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


//Route::get('/users', function () {
  // return User::select('id', 'name', 'email')->get();
//});




//Route::get('dashboard', function () {
  ////})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
