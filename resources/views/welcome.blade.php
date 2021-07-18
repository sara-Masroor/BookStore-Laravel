
@extends('layouts.default')
@section('main')

    <section >
        <div  class="show2" >
            <link rel="stylesheet" type="text/css" href="/css/category.css">
            <h3 class="subtitle">دسته بندی ها</h3>
            <div class="box-category">
                <ul  class="cat-list">
                    @foreach($cats as $cat)

                    <li><a href="/category/{{$cat->id}}">
                            {{$cat['name']}}
                        </a> <span class="down"></span></li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="show">
            <p class="txt">کتاب های پر فروش</p>
            <img id="image1" />
            <img id="image2" />
            <img id="image3" />
            <img id="image4" />

        </div>

        {{--<div class="show">--}}
            {{--<p class="txt">کتاب های پر فروش</p>--}}
            {{--@foreach($bestseller as $best)--}}
            {{--<img src="{{$best['image']}}" />--}}
            {{--@endforeach--}}
        {{--</div>--}}


    </section>

    <div class="paragraph2">
        <p>پایتون به زبان ساده اثر یونس ابراهیمی،پر فروش ترین کتاب هفته</p>
        <div>
            <a class="click-paragraph" href="{{url('detail/1')}}">مشاهده كتاب </a>
        </div>

    </div>

    {{--<div class="slider">--}}
        {{--<h2 class="text-slide">پيشنهادات داغ</h2>--}}
        {{--@foreach($special as $spc)--}}
        {{--<div class="item">--}}
           {{--<a>--}}
               {{--<img src="{{$spc->image}}" >--}}
               {{--href="{{url('detail/{product}')}}">--}}
           {{--</a>--}}
        {{--</div>--}}
        {{--@endforeach--}}
    {{--</div>--}}

    <ul class="book-list">

        <div class="text-book">
            <h2><a> رباتیک › </a></h2>
        </div>

        <div>
            @foreach($cat_3 as $cat)
                <li class="item-book">
                    <img src="{{$cat->image}}">
                    <p> {{$cat->name}}</p>
                </li>
            @endforeach

        </div>

    </ul>

    <div class="paragraph3" >
        <p> یادگیری علم آناتومی با یک کلیک</p>
        <div>
            <a class="click-paragraph" href="{{url('detail/21')}}">مشاهده كتاب </a>
        </div>
    </div>

    <ul class="book-list">

        <div class="text-book">
            <h2><a> رمان › </a></h2>
        </div>

        <div>
            @foreach($cat_4 as $cat)
                <li class="item-book">
                    <img src="{{$cat->image}}">
                    <p> {{$cat->name}}</p>
                </li>
            @endforeach

        </div>

    </ul>

    <div class="slider">

        <h2 class="text-slide">لیست انتشارات</h2>

        <div class="item">
            <img src="/img/akademic.jpg">
        </div>

        <div class="item">
            <img src="/img/nabz.jpg">
        </div>

        <div class="item">
            <img src="/img/safir.jpg">
        </div>

        <div class="item">
            <img src="/img/yas.jpg">
        </div>

        <div class="item">
            <img src="/img/alef.jpg">
        </div>

        <div class="item">
            <img src="/img/qaemiye-esf.png">
        </div>

    </div>

    <div class="paragraph4">
            <p> قصه های تاریخ، با کتاب "تاریخ همیشه زنده"</p>
            <div>
                <a class="click-paragraph" href="{{url('detail/19')}}">مشاهده كتاب </a>
            </div>
    </div>

    </main>
@endsection



