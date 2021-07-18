<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function add(Request $request,Product $product)
    {

        $request->validate([
            'comment' => 'required',
        ]);

        Comment::create([
            'user_id'=>auth()->user()->id,
            'product_id'=>$product->id,
            'comment'=> $request->comment,
        ]);
         return back();
    }

}
