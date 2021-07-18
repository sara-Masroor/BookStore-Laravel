<?php

namespace App\Http\Controllers\Admin;

/*use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;*/

use App\Models\Author;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class ProductController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $products=Product::latest()->paginate(15);
        $category = Category::all();
        $products = Product::with(['author'])
            ->search($request->input('name'))
            ->latest()
            ->paginate(10);
        return view('admin.product.index', compact('products', 'category'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::where('chid', 0)->get();
        $authors = Author::all();
        return view('admin.product.create', compact('cats', 'authors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {

            $file = $request['image'];
            $img = $this->UploadImage($file);
        }
        if ($request->hasFile('sampleFile')) {

            $file2 = $request['sampleFile'];
            $f1 = $this->UploadFile1($file2);
        }
        if ($request->hasFile('originalFile')) {

            $file3 = $request['originalFile'];
            $f2 = $this->UploadFile2($file3);
        }
        Product::create([
            'name' => $request['name'],
            'cat' => $request['cat'],
            'brand' => $request['brand'],
            'author_id' => $request['author_id'],
            'body' => $request['body'],
            'price' => $request['price'],
            'image' => $img,
            'sampleFile' => $f1,
            'originalFile' => $f2,
        ]);
        return redirect(route('product.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $cats = Category::get();
        $authors = Author::all();

        return view('admin.product.edit', compact('product', 'cats', 'authors'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $data = [
            'name' => $request['name'],
            'cat' => $request['cat'],
            'brand' => $request['brand'],
            'author_id' => $request['author_id'],
            'body' => $request['body'],
            'price' => $request['price'],
        ];
        if ($request->hasFile('image')) {

            $file = $request['image'];
            $data['image'] = $this->UploadImage($file);
        }
        if ($request->hasFile('sampleFile')) {

            $file2 = $request['sampleFile'];
            $data['sampleFile'] = $this->UploadFile1($file2);
        }
        if ($request->hasFile('originalFile')) {
            $file3 = $request['originalFile'];
            $data['originalFile'] = $this->UploadFile2($file3);
        }

        $product->update($data);
        return redirect(route('product.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('product.index'));

    }
}
