<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\TestController;

Route::get('/livewire', [TestController::class, 'render'])->name('livewire');

Route::get('/', function() {
    echo "<h1>";
        echo "Laravel Livewire - Danilo V1.0";
    echo "</h1>";
});
