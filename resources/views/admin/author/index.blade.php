<title>لیست نویسندگان</title>
@extends('layouts.admin')
@section('content')
    <section class="panel">
        <header class="panel-heading">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous" />
            <link rel="stylesheet" type="text/css" href="/css/pageinate.css" >
            <div>
                <form action="" >
                    <div style="float: right">
                        <input type="text" name="name" placeholder="نویسنده مورد نظر" class="form-control">
                    </div>
                    <div style="float: right;">
                        <button type="submit" class="btn btn-info">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
            <h1 style="margin-right: 17em">
                لیست نویسندگان وب سایت
            </h1>

        </header>

        <section style="margin-right: .5em; margin-left: .5em">

            <table class="table table-striped table-advance table-hover">
            <thead>
            <tr>
                <th><i class="icon-bullhorn"></i>ردیف</th>
                <th><i class="icon-user"></i>نام نویسنده</th>
                <th class="hidden-email"><i class="icon-question-sign"></i>ایمیل</th>
                {{--<th><i class="icon-money"></i>کیف پول</th>--}}
                <th><i class="icon-eye-open"></i>مشاهده کاربر</th>
                <th><i class="icon-ok-sign"></i>ویرایش</th>
                <th><i class="icon-remove-sign"></i>حذف</th>
            </tr>
            </thead>
            <tbody>
            @foreach($authors as $author)
                <tr>
                    <td>{{$author->id}}</td>
                    <td><a href="#">{{$author->name}}</a></td>
                    <td class="hidden-phone">{{$author->email}}</td>
{{--                    <td class="hidden-phone">{{$author->wallet}}</td>--}}
                <!--<td class="hidden-phone">
                            <a href="{{--route('user.edit',$author->id)--}}" class="btn btn-success btn-xs"><i class="icon-ok"></i>مدیریت سطح دسترسی</a>
                        </td>-->
                    <td class="hidden-phone">
                            <a href="{{route('authorDashboard',$author->id)}}" class="btn btn-info btn-xs " ><i class="icon-eye-open"></i> مشاهده </a>
                    </td>
                    <td class="hidden-phone">
                            <a href="{{route('author.edit',$author->id)}}" class="btn btn-success btn-xs"><i class="icon-ok"></i>ویرایش</a>
                    </td>
                    <td>
                        <form action="{{route('user.destroy',$author->id)}}" method="post">
                            {{method_field('delete')}}
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
        {{$authors->links()}}
    </div>

    {{--<div class="center">--}}
        {{--<div class="pagination">--}}
            {{--<a href="{{route('')}}">1</a>--}}
            {{--<a href="#" class="active">2</a>--}}
            {{--<a href="#">2</a>--}}
            {{--<a href="#">3</a>--}}
        {{--</div>--}}
    {{--</div>--}}

@endsection