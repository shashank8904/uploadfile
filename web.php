<?php
use App\Http\Controllers\UpmController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/upload', [UpmController::class, 'upload'])->name('upload');
Route::post('/upload', [UpmController::class, 'uploadPost'])->name('upload.post');
