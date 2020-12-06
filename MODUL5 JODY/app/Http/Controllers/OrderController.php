<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Product;

class OrderController extends Controller
{
    public function index(){
        $order = Orders::all();
        $product = Product::all();
        return view('history', ['order' => $order], ['product' => $product]);
    }
    
    public function create(Request $request){
        $this->validate($request,[
            'buyer_name' => 'required',
            'buyer_contact' => 'required',
            'amount' => 'required',
            'product_id' => 'required'
        ]);

        Orders::create([
            'buyer_name' => $request->buyer_name,
            'buyer_contact' => $request->buyer_contact,
            'amount' => $request->amount,
            'product_id' => $request->product_id
        ]);
        return redirect('/history');
    }
}
