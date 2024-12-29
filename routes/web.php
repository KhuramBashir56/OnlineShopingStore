<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Livewire\Web\Home::class)->name('home');
