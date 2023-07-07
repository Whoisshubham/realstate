<!DOCTYPE html>
<html lang="en">

<head>
    @include('website.layouts.head')
</head>

<body class="page-homepage navigation-fixed-top page-slider horizontal-search" id="page-top" data-spy="scroll"
    data-target=".navigation" data-offset="90">
    <!-- Wrapper -->
    <div class="wrapper">
        @include('website.layouts.header')
        @yield('content')
        @include('website.layouts.footer')
    </div>
    @include('website.layouts.script')
</body>

</html>
