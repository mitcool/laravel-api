<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoriesController;
use App\Http\Controllers\Api\ProductsController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('categories',[ CategoriesController::class,'index']);
// Route::get('categories/{category}',[CategoriesController::class,'show']);
// Route::post('categories',[CategoriesController::class,'store']);
// Route::put('categories/{category}',[CategoriesController::class,'update']);
// Route::delete('categories/{category}',[CategoriesController::class,'destroy']);

Route::apiResource('categories',CategoriesController::class);


Route::get('products',[ ProductsController::class,'index']);
Route::get('products/{product}',[ProductsController::class,'show']);
