<title>ویرایش نویسنده</title>
@extends('layouts.admin')
@section('content')
    <section class="panel">
        <header class="panel-heading">
            ویرایش {{ $author->name }}

        </header>
        <div class="panel-body">
            <form class="form-horizontal tasi-form" method="post" enctype="multipart/form-data" action="{{route('author.update',$author->id)}}">
                @csrf
                {{method_field('PATCH')}}
                <div class="form-group">
                    <label class="col-sm-2 control-label">نام </label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" value="{{ $author->name }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">ایمیل</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" value="{{ $author->email }}">
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