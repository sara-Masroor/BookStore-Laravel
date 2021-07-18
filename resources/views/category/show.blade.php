@foreach($select as $pro)
<title>دسته بندی {{$pro->cat}}</title>
@endforeach
@extends('layouts.default')
@section('main')
    <section class="box-book">
    <ul class="book-list">
        @foreach($select as $pro)
      <li class="book">
        {{--<img class="img-color" src="/img/html5.jpg"/>--}}
        <a href="/detail/{{$pro->id}}">  <img class="img-color" src="{{$pro->image}}"/></a>
        <p class="t-color"> نام کتاب: {{$pro->name}}</p>
        <p class="t-color"> مولف: {{$pro->author->name}}</p>
        <p class="t-color"> قیمت: {{$pro->price}}</p>
        <a href="/sampleDownload/{{$pro->sampleFile}}"><button class="btn-sample">دانلود نسخه نمونه</button></a>

          {{--@if (Route::has('login'))--}}
              {{--@auth--}}
                {{--<a href="/mydownload/{{$pro->originalFile}}"><button class="btn-buy">خرید کتاب</button></a>--}}
              {{--@else--}}
                  {{--<h4 class="text-buy">--}}
                      {{--برای خريد كتاب ابتدا بايد وارد حساب کاربری خود شوید--}}
                  {{--</h4>--}}
              {{--@endauth--}}
          {{--@endif--}}
        @endforeach
        </li>
    </ul>
    </section>


@endsection
