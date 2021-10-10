@extends ('layouts.layout')
@section('content')

<div class="spacebetween mediumcontainer" style="margin-top: 80px; margin-left:250px">
    <div><img src="{{$product->img}}" alt="" class="individualimg"></div>

    <section class="smallcontainer productvertical">
        <h1 class="alignleft">{{$product->name}}</h1>
        <p class="alignleft">{{$product->description}}</p>
        <p class="alignleft">{{$product->price}} RON</p>
        <form action="/add/{{$product->id}}" method="post">
            @csrf
            <div class="flexleft">
                <input type="number" name="quantity" style="max-width: 100px !important; max-height:40px;line-height:40px">
                <button class="buton" type="submit">Add to cart</button>
            </div>

        </form>

        <form action="/products/{{$product->id}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" class="buton" name="delete" value="delete">
        </form>
    </section>

</div>
@endsection