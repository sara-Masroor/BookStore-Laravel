@extends('dashboard')
@section('userpanel')
<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: "B Nazanin", sans-serif;
            border-collapse: collapse;
            width: 100%;

        }

        td, th {
            border: 1px solid #dddddd;
            text-align: right;
            padding: 8px;

        }

        tr:nth-child(even) {
            background-color: rgba(49, 71, 252, 0.18);
        }
    </style>
</head>
<body>

<h2 style="text-align: center;font-size: 1.3em; margin-bottom: .5em">اطلاعات حساب کاربری من</h2>

<table>
    <tr>
        <th>اعتبار باقی مانده</th>
        <th>آدرس ایمیل</th>
        <th>نام کاربری</th>
    </tr>
    <tr>
        <td style="font-family: Arial">{{number_format(auth()->user()->money)}}</td>
        <td>{{auth()->user()->email}}</td>
        <td>{{auth()->user()->name}}</td>
    </tr>
</table>
</body>

@endsection
@section('userpanel-2')
<body>
<h2 style="text-align: center;font-size: 1.5em; margin-bottom: .5em">خریدهای من</h2>

<table>
    <tr>
        <th>لینک دانلود کتاب</th>
        <th>شماره پیگیری</th>
        <th>قیمت</th>
        <th>انتشارات</th>
        <th>مولف</th>
        <th>نام کتاب</th>
    </tr>
    @foreach($orders as $order)
    <tr>
        <td><a href="{{$order->product->originalFile}}" class="welcome__more">لینک دانلود</a></td>
        <td style="font-family: Arial">{{$order->tracking}}</td>
        <td style="font-family: Arial">{{number_format($order->product->price)}}</td>
        <td>{{$order->product->brand}}</td>
        <td>{{$order->product->author->name}}</td>
        <td>{{$order->product->name}}</td>
    </tr>
    @endforeach
</table>
@endsection
</body>

@section('userpanel-3')
    <body>
    <h2 style="text-align: center;font-size: 1.5em; margin-bottom: .5em">نظرات من</h2>

    <table>
        <tr>
            <th>متن نظر</th>
            <th>انتشارات</th>
            <th>مولف</th>
            <th>نام کتاب</th>
        </tr>
        @foreach($comments as $comment)
            <tr>
                <td>{{$comment->comment}}</td>
                <td>{{$comment->product->brand}}</td>
                <td>{{$comment->product->author->name}}</td>
                <td>{{$comment->product->name}}</td>
            </tr>
        @endforeach
    </table>
    @endsection
    </body>
</html>