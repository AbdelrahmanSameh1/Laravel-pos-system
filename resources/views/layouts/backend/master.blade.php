<!DOCTYPE html>
<html lang="en" dir="{{\Illuminate\Support\Facades\App::getLocale() == 'en' ? '' : 'rtl'}}">

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/webmin-bootstrap-4-angular-12-admin-dashboard-template/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Sep 2022 22:54:07 GMT -->
<head>

@include('layouts.backend.head')

</head>

<body>

<div class="wrapper">

    <!--=================================
    preloader -->
    <div id="pre-loader">
        <img src="{{asset('backend/assets/images/pre-loader/loader-01.svg')}}" alt="">
    </div>
    <!--=================================
    preloader -->


@include('layouts.backend.main-header')



    <!--=================================
    Main content -->

    <div class="container-fluid">


        @include('layouts.backend.main-sidebar')

        <!--=================================
        wrapper -->
        <div class="content-wrapper">

            @yield('content')

            @include('layouts.backend.footer')

        </div>
        <!--=================================
        wrapper -->
    </div>
    <!--=================================
    Main content -->
</div>

@include('layouts.backend.script')

</body>

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/webmin-bootstrap-4-angular-12-admin-dashboard-template/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Sep 2022 22:54:47 GMT -->
</html>
