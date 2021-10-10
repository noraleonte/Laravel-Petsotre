<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class CartController extends Controller
{
    public function index()
    {
        $uid = auth()->user()->id;
        $order = Order::where('status', 'neplasata')->where('uid', $uid)->first();
        if ($order) {

            $carts = Cart::where('com_id', $order->id)->get();
        } else {
            $carts = null;
        }
        return view('shopping.cart', ['carts' => $carts]);
    }
    public function create($id, Request $request)
    {
        $this->validate($request, [
            'quantity' => 'required|min:1',
        ]);
        $uid = auth()->user()->id;
        $order = Order::where('status', 'neplasata')->where('uid', $uid)->first();
        if (!($order)) {
            Order::create([
                'status' => 'neplasata',
                'uid' => $uid,
            ]);
            $order = Order::where('status', 'neplasata')->where('uid', $uid)->first();
            Cart::create([
                'com_id' => $order->id,
                'prod_id' => $id,
                'quantity' => $request->quantity,
            ]);
            return redirect()->route('cart');
        } else {
            $cart = Cart::where('prod_id', $id)->where('com_id', $order->id)->first();
            if (!$cart) {
                Cart::create([
                    'com_id' => $order->id,
                    'prod_id' => $id,
                    'quantity' => $request->quantity,
                ]);

                return redirect()->route('cart');
            } else {
                $cart->update(['quantity' => $cart->quantity + $request->quantity]);
                return redirect()->route('cart');
            }

            // dd($order->id);
        }
    }
    public function destroy($id)
    {
        $cart = Cart::findOrFail($id);
        $cart->delete();
        return redirect()->route('cart');
    }
    public function empty($id)
    {
        $carts = Cart::where('com_id', $id)->get();
        foreach ($carts as $cart) {
            $cart->delete();
        }
        return redirect()->route('home');
    }
}
