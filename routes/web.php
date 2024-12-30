<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Web as Web;

Route::get('/', Web\Home::class)->name('home');
