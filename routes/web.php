@ -1,19 +0,0 @@
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('index');
})->name('home');

Route::get('/generic', function () {
    return view('generic');
})->name('generic');

Route::get('/elements', function () {
    return view('elements');
})->name('elements');
