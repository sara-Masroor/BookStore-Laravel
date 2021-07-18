<!DOCTYPE html>
<html>
<head>
    <link href="css/normalize.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/admin/css/menu.css">
</head>
<header>
    <div class="menu-wrapper">
        <ul class="menu">
            <li class="nav_item"><a class="menu__link" href="{{url('/')}}">صفحه اصلی</a></li>
            <li class="nav_item has_sub">
                <a class="menu__link ">مدیریت محصولات</a>
                <ul class="nav_sub">
                    <li class="nav_sub_item"><a class="menu__link" href="{{route('product.index')}}">لیست محصولات</a></li>
                    <li class="nav_sub_item"><a class="menu__link" href="{{route('product.create')}}">افزودن محصول جدید</a></li>
                </ul>
            </li>
            <li class="nav_item has_sub">
                <a class="menu__link ">مدیریت كاربران</a>
                <ul class="nav_sub">
                    <li class="nav_sub_item"><a class="menu__link" href="{{route('user.index')}}">ليست كاربران</a></li>
                    <li class="nav_sub_item"><a class="menu__link" href="{{route('user.create')}}">افزودن كاربر جدید</a></li>
                </ul>
            </li>
            <li class="nav_item has_sub">
                <a class="menu__link ">مدیریت نویسندگان</a>
                <ul class="nav_sub">
                    <li class="nav_sub_item"><a class="menu__link" href="{{route('author.index')}}">ليست نویسندگان</a></li>
                    <li class="nav_sub_item"><a class="menu__link" href="{{route('author.create')}}">افزودن نویسنده جدید</a></li>
                </ul>
            </li>
            <li class="nav_item has_sub">
                <a class="menu__link ">مدیریت دسته بندی ها</a>
                <ul class="nav_sub">
                    <li class="nav_sub_item"><a class="menu__link" href="{{route('category.index')}}">ليست دسته بندی ها</a></li>
                    <li class="nav_sub_item"><a class="menu__link" href="{{route('category.create')}}">افزودن دسته بندی جدید</a></li>
                </ul>
            </li>
            <li class="nav_item"><a class="menu__link" href={{route('order.index')}}>خریدها</a></li>
            <li class="nav_item"><a class="menu__link" href={{route('comment.index')}}>نظرات</a></li>
        </ul>
        <ul class="menu">
            <li class="nav_item">
                <a class="menu__link" style="cursor: pointer;">
                    <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <li :href="route('logout')"
                                     onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('خروج') }}
                    </li>
                    </form>
                </a>
            </li>
        </ul>
    </div>
</header>


</body>
</html>
