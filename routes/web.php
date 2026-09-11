<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello', function () {
    return 'Hello from my first Laravel route :D !';
});

Route::get('/notes',[NoteController::class,'index'])->name('notes.index');


