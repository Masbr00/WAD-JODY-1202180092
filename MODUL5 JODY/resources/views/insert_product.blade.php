@extends('layout')
@section('title', 'Insert Product')
@section('content')
<!-- content -->
<div class="container">
    <h1 class="my-5" style="text-align:center">Input Product</h1>
    <form method="get" action="product/create" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputEmail1">Product Name</label>
            <input type="text" class="form-control" name="name">
            @if($errors->has('name'))
                <div class="text-danger">
                    {{ $errors->first('name')}}
                </div>
            @endif
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
            @if($errors->has('price'))
                <div class="text-danger">
                    {{ $errors->first('price')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <textarea class="form-control" rows="5" name="description"></textarea>
            @if($errors->has('description'))
                <div class="text-danger">
                    {{ $errors->first('description')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Stock</label>
            <input type="number" class="form-control" name="stock" style="width:30%">
            @if($errors->has('stock'))
                <div class="text-danger">
                    {{ $errors->first('stock')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="exampleFormControlFile1">Image File Input</label>
            <input type="file" class="form-control-file" name="img_path">
            @if($errors->has('img_path'))
                <div class="text-danger">
                    {{ $errors->first('img_path')}}
                </div>
            @endif
        </div>

        <input type="submit" class="btn btn-dark" value="Submit">
    </form>
</div>
<!-- end of content -->
@endsection