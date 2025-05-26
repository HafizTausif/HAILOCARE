<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title') | Admin Dashboard</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin-assets/images/favicon.png') }}">
    
    <!-- Styles -->
    @include('admin.layouts.styles')
    @yield('page-style')
</head>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <!-- Main Wrapper -->
    <div id="main-wrapper">
        <!-- Nav Header -->
        @include('admin.layouts.nav-header')
        
        <!-- Sidebar -->
        @include('admin.layouts.sidebar')
        
        <!-- Content Body -->
        <div class="content-body">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Scripts -->
    @include('admin.layouts.scripts')
    @yield('page-script')
</body>
</html>