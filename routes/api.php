<?php
//TODO: Create a route for storing a book

    use App\Http\Controllers\AuthController;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\BookController;

    Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return $request->user();
    });

    Route::post("/register", [AuthController::class, "register"]);

    Route::get("/books", [BookController::class, "index"]);
