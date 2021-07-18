<title>ایجاد نویسنده جدید</title>
@extends('layouts.admin')
@section('content')
    <section class="panel">
        <header class="panel-heading">
            <h1 style="margin-right: 17em">افزودن نويسنده جدید</h1>
        </header>
        <div class="panel-body">
            <form class="form-horizontal tasi-form" method="post" action="{{route('author.store')}}">
                @csrf
                <div class="form-group">
                    <label class="col-sm-2 control-label">نام نويسنده</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">ايميل</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                    </div>
                </div>

                {{--<div class="form-group">--}}
                    {{--<label class="col-sm-2 control-label">رمز عبور</label>--}}
                    {{--<div class="col-sm-10">--}}
                        {{--<input type="text" name="password" class="form-control" value="{{ old('password')}}">--}}
                    {{--</div>--}}
                {{--</div>--}}

                <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-warning" type="submit">Save</button>
                    <button class="btn btn-default" type="reset">Cancel</button>
                </div>
            </form>
        </div>
    </section>
@endsection