@extends ('layouts.layout')

@section('content')
<div class="center">
    <h2>{{session('msg')}}</h2>
</div>

<div class="center" style="margin-top: 100px;">
    <div class="limithorizontal">
        <img src="/img/petstore.png" alt="" class="centralimg">
        <h1 class="aligncenter">Welcome to our pet store</h1>
        <div class="center"><button class="buton"><a href="{{route('products')}}">Go shopping</a></button></div>

    </div>
</div>

@endsection