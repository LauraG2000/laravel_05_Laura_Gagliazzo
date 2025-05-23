<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use Laravel\Sail\Console\PublishCommand;

Route::get('/', [PublicController::class, 'homepage'])->name('home');

Route::get('/contattaci', [PublicController::class, 'contactUs'])->name('contact-us');

Route::post('/contact/submit', [PublicController::class, 'submit'])->name('contact-submit');

Route::get('/thank-you', [PublicController::class, 'thankYou'])->name('thankYou.page');

Route::get('/coffee', [PublicController::class, 'coffee'])->name('coffee');

Route::get('/milkshake', [PublicController::class, 'milkshake'])->name('milkshake');

Route::get('/muffin', [PublicController::class, 'muffin'])->name('muffin');

