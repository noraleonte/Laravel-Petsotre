@extends ('layouts.layout')
@section('content')
<?php

use App\Models\Product;

$total = 0;
?>
@if($carts)
@if($carts->isNotEmpty())
<h1 class="aligncenter">
    Your cart
</h1>
<?php foreach ($carts as $cart) {
    $product = Product::find($cart->prod_id); ?>
    <div class="center">
        <div class="smallcontainer spacebetween">
            <div class="flexleft"><img src="{{$product->img}}" alt="" class="tinyimg">

                <p style="margin: 15px;">{{$product->name}}</p>
                <p style="margin: 15px;">{{$cart->quantity}} buc </p>
                <p style="margin: 15px;">{{$product->price}} RON/buc</p>
            </div>
            <div class="flexright">

                <?php $total = $total + $cart->quantity * $product->price ?>
                <form action="/cart/remove/{{$cart->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" name="submit" value="Remove" class="link">
                </form>
            </div>


        </div>
    </div>
<?php } ?>
<div class="center">
    <div class="smallcontainer">
        <h4 class="alignright">TOTAL: {{$total}} RON</h4>
    </div>
</div>
<div class="center">

    <form action="/order/{{$carts[0]->com_id}}" method="post">
        @csrf
        <input type="submit" name="submit" value="Place order" class="buton" style="margin: 10px;">
    </form>
    <form action="/cart/empty/{{$carts[0]->com_id}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" name="submit" value="Empty cart" class="buton" style="margin: 10px;">
    </form>
    <div class="center">
        <button class="buton" style="margin: 10px;"><a href="/products">continue shopping</a></button>
    </div>

</div>

@endif
@else
<h2 class="aligncenter">
    You don't have anything in your cart
</h2>
<div class="center">
    <button class="buton"><a href="/products">go shopping</a></button>
</div>
@endif
@endsection