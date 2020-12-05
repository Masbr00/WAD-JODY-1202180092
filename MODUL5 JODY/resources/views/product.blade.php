<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="{{ ('assets/css/bootstrap.css') }}">
    <script type="text/javascript" src="{{ ('assets/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ ('assets/js/bootstrap.js') }}"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body class ="bg-light">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active mr-4">
                    <b><a class="nav-link" href="home">HOME <span class="sr-only">(current)</span></a></b>
                </li>
                <li class="nav-item mr-4">
                    <b><a class="nav-link" href="#">PRODUCT</a></b>
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
    <!-- Content -->
    <div class="container">
        <table class="table">
            @forelse($products as $vk)
            <a href=# type="submit" class="btn btn-dark mb-3">Add Product</a>
            @empty
            @endforelse
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $vk)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $vk->name }}</td>
                    <td>{{ $vk->price }}</td>
                    <td>
                        <a href=# type="submit" class="btn btn-primary">Edit</a>
                        <a href=# type="submit" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" style="text-align:center;"><b><i>There is No Data</i></b></td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align:center;"> <a href=# type="submit" class="btn btn-dark mx-auto">Add Product</a> </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <!-- content -->
</body>
</html>