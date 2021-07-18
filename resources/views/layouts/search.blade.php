<title>جستجو</title>
@extends('layouts.default')
@section('main')

<section class="welcome">
   @if ($products->count())
    @foreach($products as $product)
    <h2 class="welcome__title">{{$product->name}}</h2>
    <div class="welcome__message clearfix">
        <img src="{{$product->image}}" alt="" class="welcome__pic">
        <p class="welcome__text2"> کتاب {{$product->name}} اثر {{$product->author->name}}</p>
        <p class="welcome__text2">انتشارات {{$product->brand}}.</p>
        <p class="welcome__text2">قیمت: {{$product->price}} تومان.</p>

    </div>
    <div style="display: inline-flex">
        <a href="/sampleDownload/{{$product->sampleFile}}" class="welcome__more">دانلود نسخه نمونه</a>
        <a href="/detail/{{$product->id}}" class="welcome__more">مشاهده کتاب</a>
    </div>
    @endforeach

</section>
{{--@endif--}}
@else
@section('main')
      <section class="not-exist-book">
          <p>
              متاسفانه این کتاب موجود نمی باشد،
              لطفا از سایر کتاب های وبسایت ما دیدن فرمایید.
              <br>
              <a href="{{url('/')}}"> بازگشت به صفحه اصلی</a>
          </p>

      </section>
@endsection
@endif

        {{--</section>--}}
@endsection

