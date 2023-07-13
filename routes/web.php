<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\{
    ShowTweets,
    TestController
};


Route::get('tweets', ShowTweets::class)->middleware('auth');

Route::get('/test', TestController::class);

Route::get('/', function() {
    echo "<h1>";
        echo "Laravel Livewire - Danilo V1.0";
    echo "</h1>";
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
