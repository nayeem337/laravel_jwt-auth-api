
<?php

use Illuminate\Support\Facades\Route;

// Redirect homepage to login page
Route::get('/', function () {
    return redirect()->route('login');
});

// Login page
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Registration page
Route::get('/register', function () {
    return view('auth.register');
})->name('register');





// Dashboard page
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');


