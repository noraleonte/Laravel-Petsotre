@extends ('layouts.layout')
@section('content')
<h1 class="aligncenter">{{auth()->user()->name}}</h1>
<div class="center">
    <div class="smallcontainer">
        <p class="aligncenter">Email: {{auth()->user()->email}}</p>
        <p class="aligncenter">Username: {{auth()->user()->username}}</p>

    </div>

</div>
<div class="center " style="max-width: 400px; margin:0 auto;">
    <button class="buton"><a href="/orders">Your Orders</a></button>
    @if(auth()->user()->username == 'admin')
    <button class="buton"><a href="/admin">Admin </a></button>
    @endif
</div>
@endsection