<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>
        @yield('title')
    </title>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    @include('front-end.include.style')
</head>
<body>

@include('front-end.include.header')

@yield('content')

@include('front-end.include.footer')

@include('front-end.include.script')

</body>
</html>
