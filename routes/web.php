<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\BookController;

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get("/books", [BookController::class, "index"]);

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');


