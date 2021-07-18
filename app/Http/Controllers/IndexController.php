<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cats=Category::get();
        $products = Product::with(['author'])
            ->search($request->input('name'));
//        $authors = Author::with(['product'])
//            ->search($request->input('name'));

        $cat_3=Product::where('cat','3')->get();
        $cat_4=Product::where('cat','4')->get();
       // $bestseller=Product::orderBy('bestSeller','desc')->get();
//        $special=Product::orderBy('bestSeller','desc')->get();

        return view('welcome',compact('cats','cat_3','cat_4','products'));
    }

    public function showSearch(Request $request, Product $id){
        $products = Product::with(['author'])
            ->search($request->input('name'))->get();

        $show = Product::where('cat', $id)->get();

        return view('layouts.search',compact('products','show'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $cats=Category::get();
//        $select=Product::where('cat','1')->get();
//        return view('category.detailBook',compact('cats','select'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
