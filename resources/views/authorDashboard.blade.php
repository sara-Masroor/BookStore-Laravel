<!DOCTYPE html>
<html lang="fa">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="text-align: right">
            {{ __('مشاهده نویسنده') }}
        </h2>
    </x-slot>

    {{--<div class="py-12" >--}}
        {{--<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
            {{--<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
                {{--<div class="p-6 bg-white border-b border-gray-200" style="text-align: right">--}}
                    @yield('author panel')
                {{--</div>--}}
                {{--<div class="p-6 bg-white border-b border-gray-200 " style="text-align: right;" >--}}
                    {{--@yield('userpanel-2')--}}
                {{--</div>--}}
                {{--<div class="p-6 bg-white border-b border-gray-200 " style="text-align: right" >--}}
                    {{--@yield('userpanel-3')--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="py-12" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200" style="text-align: right">
                    @yield('author panel-2')
                </div>
            </div>
        </div>
    </div>
    <div class="py-12" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200" style="text-align: right">
                    @yield('author panel-3')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
</html>