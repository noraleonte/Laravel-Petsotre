@extends ('layouts.layout')
@section('content')

@if(auth()->user()->username == "admin")
<div class="center">
    <h2>{{session('msg')}}</h2>
</div>
<h1 class="aligncenter">
    <a href="/products">products</a>

</h1>
<div class="center">
    <div class="flexleft mediumcontainer">
        <form action="/products/create" method="post">
            @csrf

            <input type="submit" name="submit" value="Create new" class="buton">
        </form>
    </div>
</div>


@foreach($products as $product)
<div class="center">
    <div class="mediumcontainer spacebetween">
        <div class="flexleft">
            <img src="{{$product->img}}" alt="" class="tinyimg">
            <p>{{$product->name}}</p>
        </div>

        <div class="flexright">
            <form action="/products/{{$product->id}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" name="submit" value="Remove" class="link">
            </form>
            <form action="/products/edit/{{$product->id}}" method="post">
                @csrf

                <input type="submit" name="submit" value="Edit" class="link">
            </form>
        </div>


    </div>
</div>
@endforeach

<h1 class="aligncenter">orders</h1>

@foreach($orders as $order)
<div class="center">
    <div class="mediumcontainer spacebetween">
        <div class="flexleft">

            <p>Order {{$order->id}}</p>
        </div>

        <div class="flexright">
            <form action="/order/edit/{{$order->id}}" method="post">
                @csrf
                <div class="tinycontainer">
                    <div class="spacebetween">
                        <input type="text" name="status" value="{{$order->status}}">
                        <input type="submit" name="submit" value="edit" class="link">
                    </div>
                </div>


            </form>

        </div>


    </div>
</div>
@endforeach
<h1 class="aligncenter">Categories</h1>
<div class="center">
    <div class="flexleft mediumcontainer">
        <form action="/categories/create" method="post">
            @csrf

            <input type="submit" name="submit" value="Create new" class="buton">
        </form>
    </div>
</div>
@foreach($categories as $category)
<div class="center">
    <div class="mediumcontainer spacebetween">
        <div class="flexleft">

            <p>{{$category->name}}</p>
        </div>

        <div class="flexright">
            <form action="/categories/remove/{{$category->id}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" name="submit" value="Remove" class="link">
            </form>

        </div>


    </div>
</div>
@endforeach
@endif
@endsection