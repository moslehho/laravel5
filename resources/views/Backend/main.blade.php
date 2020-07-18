@include('Backend.header')
</head>
<body class="nav-md">

<div class="container body">
    <div class="main_container">
    @include('Backend.slidebar')

    <!-- top navigation -->
    @include('Backend.top_navigation')
    <!-- /top navigation -->
        <!-- /header content -->

        <!-- page content -->
    @yield('content')


        <!-- /page content -->

@include('Backend.footer')


</body>
</html>
