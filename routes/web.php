<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\{
    ShowTweets,
    TestController
};


Route::get('tweets', ShowTweets::class);

Route::get('/test', TestController::class);

Route::get('/', function() {
    echo "<h1>";
        echo "Laravel Livewire - Danilo V1.0";
    echo "</h1>";
});
