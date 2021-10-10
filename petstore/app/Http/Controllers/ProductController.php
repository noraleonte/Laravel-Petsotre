<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index($id)
    {
        $categories = Category::all();
        $products = Product::where('category', $id)->get();
        return view('products.index', ['products' => $products, 'categories' => $categories]);
    }
    public function all()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('products.index', ['products' => $products, 'categories' => $categories]);
    }
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show', ['product' => $product]);
    }
    public function create()
    {
        $categories = Category::all();
        return view('products.create', ['categories' => $categories]);
    }
    public function store(Request $request)
    {
        //validation
        $this->validate($request, [
            'name' => 'required|max:255',
            'category' => 'required',
            'price' => 'required',
            'description' => 'required',
            'img' => 'required',
        ]);
        //store product
        Product::create([
            'name' => $request->name,
            'category' => $request->category,
            'price' => $request->price,
            'description' => $request->description,
            'img' => $request->img,


        ]);


        //redirect
        return redirect()->route('admin')->with('msg', 'Operation Successful!');
    }
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin')->with('msg', 'Operation Successful!');
    }
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('products.edit', ['categories' => $categories, 'product' => $product]);
    }
    public function store_edit($id, Request $request)
    {
        //validation
        $this->validate($request, [
            'name' => 'required|max:255',
            'category' => 'required',
            'price' => 'required',
            'description' => 'required',
            'img' => 'required',
        ]);
        //store product
        $product = Product::find($id);
        $product->update(['name' => $request->name, 'description' => $request->description, 'category' => $request->category, 'price' => $request->price, 'img' => $request->img]);


        //redirect
        return redirect()->route('admin')->with('msg', 'Operation Successful!');
    }
}
