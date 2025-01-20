<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsletterController;


Route::get('/', function () {  
    return redirect('/endbrackets');  
});  

Route::get('/endbrackets', function () {  
    return view('layouts.app');  
})->name('home');

Route::get('/endbrackets/discussion', function () {
    return view('components.call');
})->name('schedulecall');

Route::get('/video', function () {
    return view('temp.video');
});

Route::post('/newsletter-subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

// ============= Pages ==============

Route::get('/endbrackets/portfolio', function () {
    return view('pages.portfolio');
})->name('portfolio');

Route::get('/endbrackets/services', function () {
    return view('pages.services');
})->name('services');

