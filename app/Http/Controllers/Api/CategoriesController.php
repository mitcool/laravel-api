<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Category;
use App\Http\Resources\CategoryResource;
use App\Http\Requests\StoreCategoryRequest;

class CategoriesController extends Controller
{
    public function index(){
        $categories =  Category::all();
        return CategoryResource::collection($categories);
    }

    public function show(Category $category){
        return new CategoryResource($category);
    }

    public function store(StoreCategoryRequest $request){
        
        $category =  Category::create($request->all());
        return new CategoryResource($category);
    }

    public function update(Category $category,StoreCategoryRequest $request){
        $category->update($request->all());
        return $category;
    }

    public function destroy(Category $category){
        $category->delete();
        return response(null,Response::HTTP_NO_CONTENT);
    }
}
