<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/bootstrap.css') }}">
    <script type="text/javascript" src="{{ asset('asset/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/bootstrap.js') }}"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        img {
        display: block;
        margin-left: auto;
        margin-right: auto;
        }
    </style>
</head>
<body class="bg-light">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active mr-4">
                        <b><a class="nav-link" href="home">HOME <span class="sr-only">(current)</span></a></b>
                    </li>
                    <li class="nav-item mr-4">
                        <b><a class="nav-link" href="product">PRODUCT</a></b>
                    </li>
                    <li class="nav-item mr-4">
                        <b><a class="nav-link" href="order">ORDER</a></b>
                    </li>
                    <li class="nav-item mr-4">
                        <b><a class="nav-link" href="history">HISTORY</a></b>
                    </li>
                </ul>
            </div>
        </nav>
    <!-- end of navbar -->
    <!-- content -->
    @yield('content')
    <!-- end of content -->

</body>
</html>