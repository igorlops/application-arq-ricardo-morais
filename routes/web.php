<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

// Public Routes
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/sobre', [PageController::class, 'about'])->name('about');
Route::get('/servicos', [PageController::class, 'services'])->name('services');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [PageController::class, 'post'])->name('blog.post');
Route::get('/contato', [PageController::class, 'contact'])->name('contact');
Route::post('/contato', [PageController::class, 'storeContact'])->name('contact.store');

// Authentication Routes
Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'create'])->name('login');
    Route::post('login', [LoginController::class, 'store']);
});

Route::post('logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\SeoMetaController;

// Admin Protected Routes
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('posts', PostController::class);
    Route::resource('seo', SeoMetaController::class)->except(['show']);
    Route::resource('contacts', ContactController::class)->only(['index', 'show', 'destroy']);
});
