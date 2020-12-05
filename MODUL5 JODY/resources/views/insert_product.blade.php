<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="{{ ('assets/css/bootstrap.css') }}">
    <script type="text/javascript" src="{{ ('assets/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ ('assets/js/bootstrap.js') }}"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product</title>
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
    <div class="container">
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Product Name</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Price</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                        $ USD
                        </div>
                    </div>
                    <input type="number" class="form-control" name="price">
                </div>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Description</label>
                <textarea class="form-control" rows="5" name="description"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Stock</label>
                <input type="number" class="form-control" name="stock" style="width:30%">
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Image File Input</label>
                <input type="file" class="form-control-file" name="image">
            </div>

            <a href=# type="submit" class="btn btn-dark">Submit</a>
        </form>
    </div>
    <!-- end of content -->

</body>
</html>