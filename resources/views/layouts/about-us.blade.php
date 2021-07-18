<title>درباره ما</title>
@extends('layouts.default')
@section('main')

    <main style="margin-top: 2em;
            margin-right: 4em;
            margin-left: 4em;
    ">
    <div class="frag">
        <ol>
            <a href="#part1"><li>اهداف شهر كتاب</li></a>
            <a href="#part2"><li>ویژگی های شهر كتاب</li></a>
            <a href="#part3"><li>ناشران شهر كتاب</li></a>
            <a href="#part4"><li>کتاب های موجود در شهر كتاب</li></a>
            <a href="#part5"><li>درباره شهر كتاب</li></a>
            <a href="#part6"><li>آدرس و تلفن شهر كتاب</li></a>
        </ol>
    </div>
    <article class="box-index">
        <h2 id="part1" class="h2-title">اهداف شهر كتاب</h2>
        <ol class="Features">
            <li class="t-color"> توسعه بستری مناسب جهت گسترش علم برنامه نویسی</li>
            <li class="t-color">ایجاد و توسعه بستری مناسب جهت گسترش نشر الکترونیک</li>
            <li class="t-color">گسترش فرهنگ مطالعه کتاب‌های الکترونیکی </li>
            <li class="t-color">کاهش هزینه کتاب الکترونیکی به وسیله کاهش هزینه های انتشار</li>
            <li class="t-color">کمک به برنامه نویسان !!! </li>
        </ol>
        <h2 id="part2" class="h2-title">ویژگی های شهر كتاب</h2>
        <ol class="Features">
            <li class="t-color">حفاظت از حق کپی رایت آثار (هر مخاطب، یک نسخه) </li>
            <li class="t-color">تهیه و آماده سازی آسان و سریع اثر</li>
            <li class="t-color">انتشار سریع و بدون هزینه</li>
            <li class="t-color">آمارگیری لحظه‌ای از میزان فروش</li>
            <li class="t-color">وجود وب سایتی جامع و قدرتمند جهت انتشار آثار</li>
        </ol>
        <h2 id="part3" class="h2-title">ناشران شهر كتاب</h2>
        <ol class="Features">
            <li class="t-color">الف</li>
            <li class="t-color">سفیر قلم</li>
                <li class="t-color">نبض دانش</li>
                <li class="t-color">آکادمیک</li>
                <li class="t-color">شکوفه یاس</li>
                <li class="t-color">قائمیه اصفهان</li>
        </ol>
        <h2 id="part3" class="h2-title">نويسندگان شهر كتاب</h2>
        <ol class="Features">
            @foreach($authors as $author)
            <li class="t-color">{{$author->name}}</li>
            @endforeach
        </ol>
        <h2 id="part4" class="h2-title">کتاب های موجود در شهر كتاب</h2>
        <ol class="Features">
            @foreach($products as $product)
            <li class="t-color">{{$product->name}}</li>
            @endforeach
        </ol>
        <h1 id="part5" class="h2-title">درباره شهر كتاب</h1>
        <p class="t-color2">در دنیای مدرن امروز نقش و نگارهای زیادی در کتاب و کتابخوانی پدیدار گشته و این عرصه دستخوش تغییرات زیادی شده است. یکی از این تغییرات مهم نشر الکترونیک می باشد که سبب تغییر در وضعیت کتابخوانی، انتشار و توزیع سریع، کاهش هزینه ها، حذف کاغذ و دسترسی آسان به کتاب ها شده است. در این راستا موسسه توسعه راه نشر الکترونیک با نام تجاری شهر کتاب اقدام به ایجاد بستری مناسب جهت انتشار الکترونیکی کتاب‌های برنامه نویسی،طراحی سایت،علوم داده و... کرده است.</p>
        <h1 id="part6" class="h2-title">آدرس و تلفن شهر كتاب</h1>
        <p class="t-color2">آدرس:خوزستان - دزفول - روبروی پایگاه چهارم شکاری دزفول - دانشگاه صنعتی جندی شاپور دزفول - شهر کتاب<br>تلفن: 42428000-061  </p>
        <iframe id="map_index" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3367.5643682675104!2d48.36326981480321!3d32.43082528107793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fe9be5deb6103f3%3A0x657903d45ff5b9dd!2sJondi%20shapour%20university%20of%20technology%20Dezful!5e0!3m2!1sen!2s!4v1602809147838!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </article>
    </main>
@endsection



