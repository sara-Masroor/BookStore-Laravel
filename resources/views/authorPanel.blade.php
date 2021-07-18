@extends('authorDashboard')
@section('author panel')
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
@endsection
@section('author panel-2')
<body>
<h2 style="text-align: center;font-size: 1.5em; margin-bottom: .5em">کتاب های این نویسنده</h2>

<table>
    <tr>
        <th>قیمت</th>
        <th>انتشارات</th>
        <th>نام کتاب</th>
    </tr>
    @foreach($author->products as $product)
    <tr>
        <td style="font-family: Arial">{{number_format($product->price)}}</td>
        <td>{{$product->brand}}</td>
        <td>{{$product->name}}</td>
    </tr>
    @endforeach
</table>
@endsection
</body>

@section('author panel-3')
    <body>
    <h2 style="text-align: center;font-size: 1.5em; margin-bottom: .5em">نظرات کاربران درباره کتاب های این نویسنده</h2>

    <table>
        <tr>
            <th>متن نظر کاربر</th>
            <th>نام کاربر</th>
            <th>انتشارات</th>
            <th>نام کتاب</th>
        </tr>
        @foreach($comments as $comment)
            <tr>
                <td>{{$comment->comment}}</td>
                <td>{{$comment->user->name}}</td>
                <td>{{$comment->product->brand}}</td>
                <td>{{$comment->product->name}}</td>
            </tr>
        @endforeach
    </table>
    @endsection
    </body>
</html>