<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Category as CategoryResources;

class CategoryController extends Controller
{
    public function index()
    {
        return CategoryResources::collection(Category::all());
    }

    public function show($id)
    {
        return new CategoryResources(Category::find($id));
    }
}
