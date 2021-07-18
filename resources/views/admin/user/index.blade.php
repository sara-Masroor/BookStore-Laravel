<title>لیست كاربران</title>
@extends('layouts.admin')
@section('content')
    <section class="panel">
        <header class="panel-heading">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous" />
            <div>
                <form action="" >
                    <div style="float: right">
                        <input type="text" name="name" placeholder="کاربر مورد نظر" class="form-control">
                    </div>
                    <div style="float: right;">
                        <button type="submit" class="btn btn-info">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
            <h1 style="margin-right: 17em">
                لیست كاربران وب سایت
            </h1>

        </header>

        <section style="margin-right: .5em; margin-left: .5em">

            <table class="table table-striped table-advance table-hover">
            <thead>
            <tr>
                <th><i class="icon-bullhorn"></i>ردیف</th>
                <th><i class="icon-user"></i>نام کاربر</th>
                <th><i class="icon-bullhorn"></i>نقش</th>
                <th class="hidden-email"><i class="icon-question-sign"></i>ایمیل</th>
                {{--<th><i class="icon-phone-sign"></i>تلفن</th>--}}
                {{--<th><i class="icon-power-off"></i>وضعيت</th>--}}
                <th><i class="icon-money"></i>موجودي حساب</th>
                {{--<th><i class="icon-ok-sign"></i>ویرایش</th>--}}
                <th><i class="icon-remove-sign"></i>حذف</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td><a href="#">{{$user->name}}</a></td>
                    <td class="hidden-phone">{{$user->role}}</td>
                    <td class="hidden-phone">{{$user->email}}</td>

                <!--<td class="hidden-phone">
                            <a href="{{--route('user.edit',$user->id)--}}" class="btn btn-success btn-xs"><i class="icon-ok"></i>مدیریت سطح دسترسی</a>
                        </td>-->
                    <td class="hidden-phone">{{number_format($user->money)}}</td>
{{--                    <td class="hidden-phone">{{$user->status}}</td>--}}

                    <td>
                        <form action="{{route('user.destroy',$user->id)}}" method="post">
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
        {{$users->links()}}
    </div>
@endsection