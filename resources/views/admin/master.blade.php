<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link
        rel="shortcut icon"
        href="{{asset('admin-asset')}}/assets/images/favicon.svg"
        type="image/x-icon"
    />
    <title>
        @yield('title')
    </title>

    <!-- ========== All CSS files linkup ========= -->
    @include('admin.include.style')

</head>
<body>

<!-- ======== sidebar-nav start =========== -->
@include('admin.include.sidebar')
<!-- ======== sidebar-nav end =========== -->

<!-- ======== main-wrapper start =========== -->
<main class="main-wrapper">
    <!-- ========== header start ========== -->
    @include('admin.include.header')
    <!-- ========== header end ========== -->

    <!-- ========== section start ========== -->
    @yield('content')
    <!-- ========== section end ========== -->

    <!-- ========== footer start =========== -->
    @include('admin.include.footer')
    <!-- ========== footer end =========== -->
</main>
<!-- ======== main-wrapper end =========== -->

<!-- ========= All Javascript files linkup ======== -->
@include('admin.include.script')

</body>
</html>
