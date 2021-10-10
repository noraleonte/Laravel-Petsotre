@extends ('layouts.layout')
@section('content')

<div class="center">
    <a href="/products" class="p10">all</a>

    @foreach($categories as $category)
    <a href="/category/{{$category->id}}" class="p10">{{$category->name}}</a>
    @endforeach

</div>
<div class="center">
    <h2>{{session('msg')}}</h2>
</div>
<div class="bigcontainer">

    <div class="center wrap">
        @foreach($products as $product)


        <section class="productcard m50">
            <img src="{{$product->img}}" alt="" class="productcard_img" style="width: 100%; height:65%;">
            <section class="productcard_textsection">
                <p class="productcard_title">
                    <a href="/products/{{$product->id}}">{{$product->name}}</a>
                </p>

            </section>

        </section>

        @endforeach

    </div>
    @endsection