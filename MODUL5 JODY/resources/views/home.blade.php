<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="{{ ('assets/css/bootstrap.css') }}">
    <script type="text/javascript" src="{{ ('assets/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ ('assets/js/bootstrap.js') }}"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Sweet Home</title>
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
                        <b><a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a></b>
                    </li>
                    <li class="nav-item mr-4">
                        <b><a class="nav-link" href="#">PRODUCT</a></b>
                    </li>
                    <li class="nav-item mr-4">
                        <b><a class="nav-link" href="#">ORDER</a></b>
                    </li>
                    <li class="nav-item mr-4">
                        <b><a class="nav-link" href="#">HISTORY</a></b>
                    </li>
                </ul>
            </div>
        </nav>
    <!-- end of navbar -->
    <!-- content -->
    <div class="container">
        <img src="{{ ('assets/sepatu.png') }}" style="height:300px;with:auto;margin-top:100px">
    </div>
    <!-- end of content -->

</body>
</html>