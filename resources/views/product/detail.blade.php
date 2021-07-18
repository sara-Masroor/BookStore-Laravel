<title>جزئیات {{$product->name}}</title>
@extends('layouts.default')
@section('main')

<section class="welcome">
    {{--@if(session('error'))--}}
        {{--<script>--}}
            {{--swal({--}}
                {{--title: "خطا",--}}
                {{--text: "موجودی شما برای خرید این کتاب کافی نیست",--}}
                {{--icon: "error",--}}
                {{--button: "باشه",--}}
            {{--});--}}
        {{--</script>--}}
    {{--@endif--}}


    <h2 class="welcome__title">{{$product->name}}</h2>
    <div class="welcome__message clearfix">
        <img src="{{$product->image}}" alt="" class="welcome__pic">
        <p class="welcome__text2"> کتاب {{$product->name}} اثر {{$product->author->name}}</p>
        <p class="welcome__text2">انتشارات {{$product->brand}}.</p>
        <p class="welcome__text2">قیمت: {{$product->price}} تومان.</p>
    </div>
    <div style="display: inline-flex">
        <a href="/sampleDownload/{{$product->id}}" class="welcome__more">دانلود نسخه نمونه</a>
{{--        <a href="/sampleDownload/{{$product->sampleFile}}" class="welcome__more">دانلود نسخه نمونه</a>--}}
            @if (Route::has('login'))
                @auth
                    <a @if(auth()->user()->money<$product->price) disabled @endif
                    href="{{auth()->user()->money>=$product->price?route('book.buy',$product->id):'#'}}"
                       class="welcome__more">خريد كتاب</a>

                    {{--<a @if(auth()->user()->money<$product->price) disabled @endif href="{{auth()->user()->money>=$product->price?route('book.buy',[substr($product->originalFile,9),$product->id]):'#'}}" class="welcome__more">خريد كتاب</a>--}}
                {{--@if(session('error'))--}}
                    {{--<script>--}}
                        {{--swal({--}}
                            {{--title: "خطا",--}}
                            {{--text: "موجودی شما برای خرید این کتاب کافی نیست",--}}
                            {{--icon: "error",--}}
                            {{--button: "باشه",--}}
                        {{--});--}}
                    {{--</script>--}}
                {{--@endif--}}
        @else
            <h4 style="margin-right: 5em;">
                        براي خريد كتاب ابتدا بايد وارد حساب كاربري خود شويد
                        <a class="btn btn-primary" href="{{ route('register') }}">ثبت نام</a>
                        <a class="btn btn-success" href="{{ route('login') }}">ورود اعضا</a>
                    </h4>
                <script>
                    swal({
                        title: "هشدار",
                        text: "براي خريد كتاب ابتدا بايد وارد حساب كاربري خود شويد",
                        icon: "warning",
                        button: "باشه",

                    });
                </script>
            @endauth
        @endif
    </div>

</section>
<div class="welcome__message clearfix">
    <p class="welcome__text" id="titr"><b>معرفی کتاب {{$product->name}}</b></p>
    <p class="welcome__text">
    {{$product->body}}
    </p>
</div>

<div class="row">
    <div class="col-lg-12">
        @if (Route::has('login'))
            @auth
                <h3 class="text-comment">
                    نظر خود را در رابطه با این کتاب برای ما بنویسید:
                </h3>
            @else
                <h3 class="text-comment">
                    برای ثبت نظر خود ابتدا وارد حساب کاربری خود شوید
                    <a class="btn btn-primary" href="{{ route('register') }}">ثبت نام</a>
                    <a class="btn btn-success" href="{{ route('login') }}">ورود اعضا</a>
                </h3>
            @endauth
        @endif
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        @if(Auth::check())
            <form method="post" action="{{route('comment.add',$product->id)}}">
                 @csrf
                <div class="form-group">
                    <textarea class="form-control" rows="5" name="comment" placeholder="متن مورد نظر شما..."></textarea>
                </div>

                <button type="submit" class="btn btn-primary">ثبت</button>
                <button type="reset" class="btn btn-danger">انصراف</button>
            </form>
        @endif
    </div>
</div>

<section class="comment-1">
    <div class="container-com">
        <div class="row1">

            @foreach($product->comments as $comment)
                <div class="col-md-12 col-sm-6  comments">
                    <img src="/img/user.png" width="30" class="userComment">
                       <h5>{{$comment->user->name}} </h5>
                    <p class="p-comment">
                        {{ $comment->comment }}
                    </p>
                </div>
            @endforeach

        </div>
    </div>
</section>
@endsection
