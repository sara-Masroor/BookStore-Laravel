<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Comment;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AuthorPanelController extends Controller
{
    public function books($id)
    {

        $author=Author::with(['products'])->findOrFail($id);
//              $products=$authors->products;

        $comments=Comment::whereHas('product',function($product)use($id){
           return $product->where('author_id',$id) ;
        })->with('user')->paginate(10);
        return view('authorPanel',compact('author','comments'));

    }
}
