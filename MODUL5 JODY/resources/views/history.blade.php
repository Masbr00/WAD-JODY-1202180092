@extends('layout')
@section('title', 'History')
@section('content')
<!-- content -->
    <div class="container">
        <h1 class="my-5" style="text-align:center">History</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>product</th>
                    <th>Buyer Name</th>
                    <th>Contact</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                @forelse($order as $vk)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                    @foreach($product as $vk2)
                        @if($vk->product_id == $vk2->id)
                            {{ $vk2->name }}
                        @endif
                    @endforeach
                    </td>
                    <td>{{ $vk->buyer_name }}</td>
                    <td>{{ $vk->buyer_contact }}</td>
                    <td>
                    @foreach($product as $vk2)
                        @if($vk->product_id == $vk2->id)
                            ${{ $vk2->price * $vk->amount }},00
                        @endif
                    @endforeach
                    </td>
                </tr>
                @empty
                <center>
                <tr>
                    <td colspan="5" style="text-align:center;"><b><i>There is No Data</i></b></td>
                </tr>
                <tr>
                    <td colspan="5" style="text-align:center;"> <a href="order" type="submit" class="btn btn-dark mx-auto">Add Product</a> </td>
                </tr>
                <center>
                @endforelse
            </tbody>
        </table>
    </div>
<!-- end of content -->
@endsection