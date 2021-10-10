<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $uid = auth()->user()->id;
        $orders = Order::where('uid', $uid)->get();
        return view('shopping.orders', ['orders' => $orders]);
    }
    public function create($id)
    {
        $order = Order::find($id);
        $order->update(['status' => 'plasata']);
        return redirect()->route('products')->with('msg', 'Order placed!');
    }
}
