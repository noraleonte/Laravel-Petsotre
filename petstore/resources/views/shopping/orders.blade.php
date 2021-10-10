@extends ('layouts.layout')
@section('content')
<?php

use App\Models\Cart;
use App\Models\Product;


?>
@if(($orders))
@foreach($orders as $order)
<?php $total = 0; ?>
<h2 class="aligncenter">Order {{$order->id}}</h2>
<?php
$carts = Cart::where('com_id', $order->id)->get();
foreach ($carts as $cart) {

    $product = Product::find($cart->prod_id); ?>
    <div class="center">
        <div class="smallcontainer spacebetween">
            <div class="flexleft"><img src="{{$product->img}}" alt="" class="tinyimg">

                <p style="margin: 15px;">{{$product->name}}</p>
                <p style="margin: 15px;">{{$cart->quantity}} buc </p>
                <p style="margin: 15px;">{{$product->price}} RON</p>
            </div>

            <p>SUBTOTAL: {{$cart->quantity*$product->price}} RON </p>
            <?php $total = $total + $cart->quantity * $product->price ?>

        </div>
    </div>
<?php }
?>
<div class="center">
    <div class="smallcontainer">
        <h4 class="alignright">TOTAL: {{$total}} RON</h4>
    </div>
</div>
<div class="center">

    <div class="smallcontainer">
        <p class="alignright">{{$order->status}}</p>
    </div>
</div>




@endforeach
@endif

@endsection