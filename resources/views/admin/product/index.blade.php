<?php use App\Models\Category; ?>
<title>لیست کتاب ها</title>
@extends('layouts.admin')
@section('content')
    <section class="panel">
        <header class="panel-heading" >
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous" />
            <div>
                <form action="" >
                    <div style="float: right">
                        <input type="text" name="name" placeholder="کتاب مورد نظر" class="form-control">
                    </div>
                    <div style="float: right;">
                        <button type="submit" class="btn btn-info">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
            <h1 style=" margin-right: 17em; ">
                لیست کتاب های وبسایت
            </h1>
        </header>

        <section style="margin-right: .5em; margin-left: .5em">
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th><i class="icon-bullhorn"></i>ردیف</th>
                    <th><i class="icon-bullhorn"></i>نام کتاب</th>
                    <th><i class="icon-bullhorn"></i>نام نویسنده</th>
                    <th class="hidden-phone"><i class="icon-question-sign"></i>انتشارات</th>
                    <th class="hidden-phone"><i class="icon-question-sign"></i>دسته بندی</th>
                    <th><i class="icon-bookmark"></i>تصویر</th>
                    {{--<th><i class="icon-bookmark"></i>نسخه نمونه</th>--}}
                    {{--<th><i class="icon-bookmark"></i>نسخه کامل</th>--}}
                    <th><i class=" icon-edit"></i>قیمت</th>
                    <th><i class=" icon-edit"></i>توضیحات</th>
                    <th> ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td  width="100">{{$product->id}}</td>
                        <td  width="170"><a href="#">{{$product->name}}</a></td>
                        <td  width="140"><a href="#">{{$product->author->name}}</a></td>
                        <td  width="110" class="hidden-phone">{{$product->brand}}</td>
                        @if($category->where('id',$product->cat)->first() == null)
                            <td>no category</td>
                        @else
                            @foreach($category->where('id',$product->cat) as $cat)
                                <td width="160">{{$cat->name}}</td>
                            @endforeach
                        @endif
                        <td><img src="{{$product->image}}" width="70"></td>
                        {{--<td class="hidden-phone">$product->sampleFile</td>--}}
                        {{--<td class="hidden-phone">$product->originalFile</td>--}}
                        <td  width="100">{{number_format($product->price)}}</td>
                        <td  width="250">{{$product->body}}</td>
                        <td>
                            <a href="{{route('product.edit',$product->id)}}" class="btn btn-success btn-xs"><i class="icon-ok"></i>ویرایش</a></td>
                        <td>
                            <form action="{{route('product.destroy',$product->id)}}" method="post">
                                {{ method_field('delete') }}
                                @csrf
                                <button  type="submit" class="btn btn-danger btn-xs"><i class="icon-remove"></i>حذف</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </section>
    </section>
    <div class="text-center">
        {{$products->links()}}
    </div>
@endsection