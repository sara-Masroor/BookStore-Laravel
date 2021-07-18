<title>ویرایش کتاب</title>
@extends('layouts.admin')
@section('content')
    <section class="panel">
        <header class="panel-heading">
            ویرایش {{ $product->name }}

        </header>
        <div class="panel-body" style="margin-left: 6em; margin-right: 2em">
            <form class="form-horizontal tasi-form" method="post" enctype="multipart/form-data" action="{{route('product.update',$product->id)}}">

                @csrf
                {{method_field('PATCH')}}
                <div class="form-group">
                    <label class="col-sm-2 control-label">نام کتاب</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">نام نویسنده</label>
                    <div class="col-sm-10">
                        <select name="author_id" class="form-control input-lg m-bot15">
                            @foreach($authors as $author)
                                <option @if($author['id']===$product->author->id) selected @endif value="{{$author['id']}}">{{$author['name']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">انتشارات</label>
                    <div class="col-sm-10">
                        <input type="text" name="brand" class="form-control" value="{{ $product->brand }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">دسته بندی</label>
                    <div class="col-sm-10">
                        <select name="cat" class="form-control input-lg m-bot15">
                            @foreach($cats as $val)
                                <option value="{{$val['id']}}">{{$val['name']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">تصویر</label>
                    <div class="col-sm-10">
                        <input type="file" name="image" class="form-control round-input" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">نسخه نمونه</label>
                    <div class="col-sm-10">
                        <input type="file" name="sampleFile" class="form-control round-input" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">نسخه اصلی</label>
                    <div class="col-sm-10">
                        <input type="file" name="originalFile" class="form-control round-input" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">قیمت</label>
                    <div class="col-sm-10">
                        <input type="text" name="price" class="form-control" value="{{ $product->price }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">توضیحات کتاب</label>
                    <div class="col-sm-10">
                        <textarea name="body" id="" cols="80" rows="10">{{ $product->body }}</textarea>
                    </div>
                </div>

                <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-warning" type="submit">Save</button>
                    <button class="btn btn-default" type="reset">Cancel</button>
                </div>
            </form>
        </div>
    </section>
@endsection