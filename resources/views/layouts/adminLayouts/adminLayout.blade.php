<!-- Header Start-->
@include('layouts.includes.header')
<!-- Header End -->

<!-- Wrapper Start -->
<div class="wrapper">
    <!-- Navbar Start -->
@include('layouts.includes.navbar')
<!-- Navbar End -->

    <!-- Sidebar Start -->
@include('layouts.includes.sidebar')
<!-- Sidebar End -->
@section('title', 'Dashboard')

    <!-- Main Container Start -->
    <main class="main--container">
        <!-- Page Header Start -->
        <section class="page--header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Page Title Start -->
                        <h2 class="page--title h5">@yield('title')</h2>
                        <!-- Page Title End -->

                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active"><span>@yield('title')</span></li>
                        </ul>
                    </div>

                    <div class="col-lg-6">
                        <!-- Summary Widget Start -->
                        <div class="summary--widget">
                            <div class="summary--item">
                                <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#009378">2,9,7,9,11,9,7,5,7,7,9,11</p>

                                <p class="summary--title">This Month</p>
                                <p class="summary--stats text-green">2,371,527</p>
                            </div>

                            <div class="summary--item">
                                <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#e16123">2,3,7,7,9,11,9,7,9,11,9,7</p>

                                <p class="summary--title">Last Month</p>
                                <p class="summary--stats text-orange">2,527,371</p>
                            </div>
                        </div>
                        <!-- Summary Widget End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Header End -->
        <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))
                    <p class="alert alert-{{ $msg }}">{{Session::get('alert-' . $msg) }}</p>
                @endif
            @endforeach
        </div>
        <!-- Main Content Start -->
    @yield('content')
    <!-- Main Content Start -->


        <!-- Main Footer Start -->
        <footer class="main--footer main--footer-light">
            <p>Copyright &copy; <a href="">ar_cse@yahoo.com</a>. All Rights Reserved.</p>
        </footer>
        <!-- Main Footer End -->
    </main>
    <!-- Main Container End -->
</div>
<!-- Wrapper End -->


<!-- Footer Start-->
@include('layouts.includes.footer')
<!-- Footer Start-->



