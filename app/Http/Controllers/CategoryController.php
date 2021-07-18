<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function showProduct(Request $request, $id)
    {
       // dd($id);
        $cats = Category::get();
        $select = Product::where('cat', $id)->get();
        return view('category.show', compact('cats', 'select', 'id'));

    }

}
