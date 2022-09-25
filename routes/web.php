<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class,'index'])->name('home');
Route::get('services', [PageController::class,'services'])->name('services');
Route::get('realisations', [PageController::class,'realisations'])->name('realisations');
Route::get('boutiques', [PageController::class,'boutiques'])->name('boutiques');
Route::get('contact', [PageController::class,'contact'])->name('contact');
Route::post('contact', [PageController::class,'sendMessage'])->name('contact.send');
Route::get('devis', [PageController::class,'devis'])->name('devis');

