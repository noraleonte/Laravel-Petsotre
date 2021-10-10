<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;


class AdminController extends Controller
{
    public function __construct()
    {

        $this->middleware(['auth', 'admin']);
    }
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        $orders = Order::all();
        return view('admin.index', ['products' => $products, 'categories' => $categories, 'orders' => $orders]);
    }
    public function edit_order($id, Request $request)
    {
        $order = Order::find($id);
        $order->update(['status' => $request->status]);
        return redirect()->route('admin')->with('msg', 'Successful operation!');
    }
    public function create_cat()
    {
        return view('admin.cat');
    }
    public function store_cat(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);
        Category::create([

            'name' => $request->name
        ]);
        return redirect()->route('admin')->with('msg', 'Successful operation!');
    }
    public function delete_cat($id)
    {
        $cat = Category::find($id);
        $cat->delete();
        return redirect()->route('admin')->with('msg', 'Successful operation!');
    }
}
