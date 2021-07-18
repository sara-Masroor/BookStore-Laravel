<title>لیست دسته بندی ها</title>
@extends('layouts.admin')
@section('content')
    <section class="panel">
        <header class="panel-heading">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous" />

            <div>
                <form action="" >
                    <div style="float: right">
                        <input type="text" name="name" placeholder="دسته بندی مورد نظر" class="form-control">
                    </div>
                    <div style="float: right;">
                        <button type="submit" class="btn btn-info">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                   </form>
            </div>
            <h1 style=" margin-right: 16em; ">
                لیست دسته بندی های وب سایت
            </h1>
        </header>

        <section style="margin-right: .5em; margin-left: .5em">
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th><i class="icon-list-ul"></i>ردیف</th>
                    <th><i class="icon-bullhorn"></i>نام دسته بندی</th>
                    <th> ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                @foreach($category as $val)
                    <tr>
                        <td>{{$val->id}}</td>
                        <td><a href="#">{{$val->name}}</a></td>
                        <td>
                            <a href="{{route('category.edit',$val->id)}}" class="btn btn-success btn-xs"><i class="icon-ok"></i>ویرایش</a></td>
                        <td>
                            <form action="{{route('category.destroy',$val->id)}}" method="post">
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
        {{$category->links()}}
    </div>
@endsection