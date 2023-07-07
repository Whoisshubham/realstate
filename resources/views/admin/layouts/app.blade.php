<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts.head')
</head>

<body data-sidebar="colored">
    {{-- <body data-layout="horizontal" data-topbar="dark"> --}}
    @include('admin.layouts.header')
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('admin.layouts.sidebar')
        <div class="main-content">
            @yield('content')
            @include('admin.layouts.footer')
        </div>
    </div>
    @include('admin.layouts.theam')
    @include('admin.layouts.script')
</body>

</html>
