<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    public function show(Category $category)
    {
        $products = Product::all()->where('category_id', $category->id);
        return view('categories.show', compact('category', 'products'));
    }
}
