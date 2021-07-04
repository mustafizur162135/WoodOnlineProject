<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title','Wood Online | Admin Panel')</title>
    {{-- css area --}}
    @include('backend.layouts.partial.css_area')
    {{-- css area end --}}
    @yield('css_area')

</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->



    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->


    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        @include('backend.layouts.partial.sidebar_area')
    </div>
    <!-- sidebar menu area end -->


    <!-- main content area start -->



    <div class="main-content">
        <!-- header area start -->

        @include('backend.layouts.partial.header_area')
        <!-- header area end -->

        @yield('admin-content')



        {{-- here --}}
        @yield('under_admin')

    </div>
    <!-- main content area end -->



    {{-- to here --}}




    <!-- footer area start-->
    <footer>
        <div class="footer-area">
            <p>© Copyright 2018. All right reserved. Template by <a href="https://colorlib.com/wp/">Colorlib</a>.
            </p>
        </div>
    </footer>
    <!-- footer area end-->



    </div>
    <!-- page container area end -->



    <!-- offset area start -->
    @include('backend.layouts.partial.offset_area')
    <!-- offset area end -->

    {{-- script area start --}}
    @include('backend.layouts.partial.script_area')
    {{-- script area end --}}


    @yield('script_area')

</body>

</html>