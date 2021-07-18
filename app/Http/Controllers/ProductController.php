<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function detail($id)
    {
        //$product=Product::get();
        $product = Product::with([
            'comments' => function ($query) {
                return $query->with('user');
            }
        ])
            ->findOrFail($id);
        $cats = Category::get();
        $select = Product::where('cat', $id)->get();
        $user = User::get();
        return view('product.detail', compact('product', 'cats', 'select', 'id', 'user'));

    }


    public function OriginalDownload($id)
    {
        $product = Product::findOrFail($id);

        $user = Auth::user();
        if ((int)$user->money >= (int)$product->price) {
            $user->decrement('money', $product->price);

            Order::create([
                'user_id' => auth()->user()->id,
                'product_id' => $product->id,
                'total' => $product->price,
                'tracking' => 'ord' . time(),

            ]);

            return $this->downloadFile($product->originalFile);

        }
        return redirect(route('product.detail', $id))->with('error', 'money');

    }

    public function sampleDownload($id)
    {
        $product = Product::findOrFail($id);

        //$path = substr($path, 6);
        //$file = public_path("uploads/sample/" . "$path");

        //$file=$path;
        $headers = [
            'content-type' => 'application/pdf'
        ];

        return $this->downloadFile($product->sampleFile);
//        return response()->download(public_path().($file));
    }


    protected function downloadFile($path)
    {
        header('content-type: application/pdf');
        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        return response()->download(public_path() . ($path));

    }


}
