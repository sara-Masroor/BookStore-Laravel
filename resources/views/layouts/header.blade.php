<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>صفحه اصلي</title>
    <link href="/css/normalize.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="/css/style.css" >
    {{--<link rel="stylesheet" type="text/css" href="/css/bootstrap.css" >--}}
    <script type="text/javascript" src="/js/date_time.js"></script>

    <!--------------------------------add-------------------------------------------->
    <meta name="description" content="Responsive and clean html template design for any kind of ecommerce webshop">
    <link rel="stylesheet" type="text/css" href="js/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="js/bootstrap/css/bootstrap-rtl.min.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.transitions.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="css/stylesheet-rtl.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive-rtl.css" />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans' type='text/css'>
    <!-------------------------------------------------------------------------------->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<header>
    <div class="menu-wrapper">
        <ul class="menu">
            @if (Auth::user() && Auth::user()->role == 'admin')
            <li class="nav_item"><a class="menu__link" href="{{ url('/home') }}">پنل مدیریت</a></li>
            @endif
            <li class="nav_item"><a class="menu__link" href="{{ url('/about') }}">درباره ما</a></li>
        </ul>
        <div>
            <form action="{{route('search')}}" method="get">
                <div style="float: right;margin-right: 52em">
                    <input type="text" name="name" placeholder="جستجو براساس نام کتاب"
                           class="form-control" value="{{request()->input('name')}}">
                </div>
                <div style="float: right;">
                    <button type="submit" class="btn btn-info">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </form>
        </div>

        <ul class="menu">
            @if (Route::has('login'))
                @auth
                    @if (Auth::user() && Auth::user()->role == 'user')
                    <li class="nav_item"><a class="menu__link" href="{{ url('/dashboard') }}">پنل کاربری</a></li>
                    @endif
                    @if (Auth::user() && Auth::user()->role == 'author')
                        <li class="nav_item"><a class="menu__link" href="{{ url('/authorDashboard') }}">پنل کاربری</a></li>
                    @endif
            @else
                    <li class="nav_item"><a class="menu__link" href="{{ route('login') }}">ورود</a></li>
                    <li class="nav_item"><a class="menu__link" href="{{ route('register') }}">ثبت نام</a></li>
                @endauth
            @endif
        </ul>
    </div>

    <div class="banner">
        <div class="inner-container">
            <div class="banner__wrapper">
                <h2 class="banner__title">شهر کتاب</h2>
                <p><br></p>
                <span id="date_time"></span>
                <script type="text/javascript">window.onload = date_time('date_time');</script>
            </div>
        </div>
    </div>
</header>

</body>

</html>