@extends('base')
@section('content')
<div class="container-1">
    <div>
        @yield('title')
    </div>
    <div class="flex justify-end">
        @yield('buttons')
    </div>
    <div class="flex justify-end">
        @yield('toolbar-1')
    </div>
</div>


<div class="container-2">
    <div class="w-full p-6 border-t border-gray-200 md:border-t-0 md:border-l col-span-2">
        @yield('body')
    </div>
</div>
@endsection
