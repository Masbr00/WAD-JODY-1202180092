@extends('layout')
@section('title', 'Detail Order')
@section('content')
    <div class="container">
        <h1 class="my-5 px-0 py-0" style="text-align:center">Order</h1>
        <div class="row mx-auto" style="width:90%">
            <div class="col-sm pr-0 pl-0 bg-dark">
                <img class="card-img-top bg-dark" src="...">
            </div>
            <div class="col-sm pl-0 pr-0 bg-white">
                <div class="card border-0" style="width:310px">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text" style="font-size:24px">${{ $product->price }},00</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-auto mt-3" style="width:90%">
            <div class="col bg-white py-3">
                <center>
                    <label>Buyer Informations</label>
                </center>
                <form action="order/create">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Name" name="buyer_name">
                        @if($errors->has('name'))
                            <div class="text-danger">
                                {{ $errors->first('name')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Contact</label>
                        <input type="tel" class="form-control" placeholder="Contact" name="buyer_contact">
                        @if($errors->has('buyer_contact'))
                            <div class="text-danger">
                                {{ $errors->first('buyer_contact')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="number" class="form-control" placeholder="Quantity" name="amount" style="width:40%">
                        @if($errors->has('amount'))
                            <div class="text-danger">
                                {{ $errors->first('amount')}}
                            </div>
                        @endif
                        <input type="text" class="form-control" placeholder="Quantity" name="product_id" value="{{ $product->id }}" readonly hidden>
                        @if($errors->has('product_id'))
                            <div class="text-danger">
                                {{ $errors->first('product_id')}}
                            </div>
                        @endif
                    </div>
                    <input type="submit" class="btn btn-success" value="Submit">
                </form>
            </div>
        </div>
        <br>
        <br>
    </div>
@endsection