<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Product;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        $products=Product::all();
        $authors=Author::all();
        return view('layouts.about-us',compact('products','authors'));
    }
}
