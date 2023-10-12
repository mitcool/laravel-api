<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Resources\ProductResource;


class ProductsController extends Controller
{
    public function index(){
        $products = Product::with('category')->paginate(10);
        return ProductResource::collection($products);
    }
}
