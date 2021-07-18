@include('layouts.header')
    {{--<div class="container">--}}
        {{--@include('layouts.category')--}}
    {{--</div>--}}
<div id="container">
    <div>
        {{--<div style="float: right; margin-right: 5em">--}}
            {{--@include('layouts.category')--}}
        {{--</div>--}}
        <div class="row">
            @yield('main')
        </div>

    </div>
</div>
<div>
{{--    @include('layouts.index')--}}
</div>

@include('layouts.footer')

