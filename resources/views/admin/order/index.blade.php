<title>لیست خریدها</title>
@extends('layouts.admin')
@section('content')
    <section class="panel">
        <header class="panel-heading" >
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous" />
            <div>
                <form action="" >
                    <div style="float: right">
                        <input type="text" name="name" placeholder="سفارش مورد نظر" class="form-control">
                    </div>
                    <div style="float: right;">
                        <button type="submit" class="btn btn-info">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
            <h1 style=" margin-right: 17em; ">
                لیست خریدهای وبسایت
            </h1>
        </header>

        <section style="margin-right: .5em; margin-left: .5em">
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th><i class="icon-bullhorn"></i>ردیف</th>
                    <th><i class="icon-bullhorn"></i>نام خریدار</th>
                    <th><i class="icon-bullhorn"></i>نام کتاب</th>
                    <th><i class=" icon-edit"></i>شماره پیگیری</th>
                    <th><i class=" icon-edit"></i>قیمت کتاب</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->user->name}}</td>
                        <td>{{$order->product->name}}</td>
                        <td>{{$order->tracking}}</td>
                        <td>{{number_format($order->product->price)}}</td>
                        <td>
                            <form action="{{route('order.destroy',$order->id)}}" method="post">
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
        {{--{{$order->links()}}--}}
    </div>
@endsection