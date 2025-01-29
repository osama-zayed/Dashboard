<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    @include('layouts.head')


</head>

<body>

    <div class="wrapper">

        <div id="pre-loader">
            <img src="assets/admin/images/pre-loader/loader-01.svg" alt="">
        </div>


        @include('layouts.main-header')

        @include('layouts.main-sidebar')

        <!-- main-content -->
        <div class="content-wrapper">

            <div class="page-title">
                <div class="row">
                    <h5 class="col-sm-6">
                        @yield('page-header')/
                        <span style="color: gray"> @yield('sub-page-header')</span>
                    </h5>
                </div>
            </div>

            @yield('content')



            @include('layouts.footer')
        </div>
    </div>
    </div>
    </div>



    @include('layouts.footer-scripts')

</body>

</html>
