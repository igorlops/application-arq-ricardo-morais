<?php

use App\Http\Controllers\ContactLandingPageController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/contact-landing-pages', [ContactLandingPageController::class, 'store']);
