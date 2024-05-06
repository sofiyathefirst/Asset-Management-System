<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Css -->
    <link href="{{asset('bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('bootstrap/css/bootstrap-utilities.css')}}" rel="stylesheet"></link>
    <link href="{{asset('bootstrap/css/bootstrap-grid.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    
    <!-- js -->
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <title>ASSET MANAGEMENT SYSTEM</title>
</head>
<body class="bg-light-corp d-flex flex-column">
    @guest
        @else
        <div class="navbar bg-white border-bottom">
            @guest
            @else
                <img class="navbar-brand me-auto ps-5" alt="icon" width="250" height="80" src="{{asset('img/logo-corporate.png')}}">
            @endguest

            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav m-auto">
                <h4>CORPORATE FINANCE SYSTEM</h4>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto pe-5">
                <a class="btn btn-primary" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    
                </form>
            </ul>
        </div>
    @endguest
    <div class="container-fluid d-flex flex-row p-0">
        <div class="col-auto bg-primary border-end">
            @guest
            @else
            @include('layouts/sidebar')
            @endguest
        </div>
        <main class="col px-5 pt-4">
            @guest
            @else
            <a data-bs-target="#sidebar" data-bs-toggle="collapse" class="btn btn-primary"><i class="bi bi-list bi-lg py-2 p-1"></i> Menu</a>
            @endguest
            @yield('content')
            </div>
        </main>
    </div>
    <!-- <div class="footer text-center bg-lightsecondary">
        <div class="container">
            <span class="text-white">&copy 2024 All Rights Reserved, Jakel Development</span>
        </div>
    </div> -->
</body>
<script>
$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});
</script>
</html>