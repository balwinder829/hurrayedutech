<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


// Fallback route for anything not matched
Route::fallback(function () {
    return response()->view('coming-soon', [], 404);
});


// Route::get('{any}.html', function () {
//     return response()->view('coming-soon', [], 404);
// })->where('any', '.*');

Route::get('{any}.html', function ($any) {
    return redirect("/$any", 301);
})->where('any', '.*');