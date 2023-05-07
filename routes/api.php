<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Get all books
Route::get('/books', [ApiController::class, 'index']);

// Get a single book
Route::get('/books/{id}', [ApiController::class, 'show']);

// Create a new book
Route::post('/books', [ApiController::class, 'store']);

// Update an existing book
Route::put('/books/{id}', [ApiController::class, 'update']);

// Delete a book
Route::delete('/books/{id}', [ApiController::class, 'destroy']);
