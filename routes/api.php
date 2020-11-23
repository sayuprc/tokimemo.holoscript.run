<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ArticleController;

Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/article/show/{id}', [ArticleController::class, 'show']);
Route::get('/article/create', [ArticleController::class, 'create']);
Route::get('/article/update/{id}', [ArticleController::class, 'update']);
Route::get('/article/delete/{id}', [ArticleController::class, 'delete']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
