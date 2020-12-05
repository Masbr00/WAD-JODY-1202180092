@extends('layout')
@section('title', 'Product')
@section('content')
    <div class="container">
        <h1 class="my-5" style="text-align:center">List Product</h1>
        <table class="table">
            <a href="insert_product" type="submit" class="btn btn-dark mb-3">Add Product</a>
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
                        <a href="/product/update/{{ $vk->id }}" type="submit" class="btn btn-primary">Edit</a>
                        <a href="/product/delete/{{ $vk->id }}" type="submit" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" style="text-align:center;"><b><i>There is No Data</i></b></td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align:center;"> <a href="insert_product" type="submit" class="btn btn-dark mx-auto">Add Product</a> </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <!-- content -->
@endsection