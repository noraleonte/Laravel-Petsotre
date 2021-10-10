@extends ('layouts.layout')
@section('content')

<div class="center">
    <div class="m50 tinycontainer">
        <h1 class="aligncenter">Log In</h1>
        <form action="{{route('login')}}" method="post">
            @if(session('status'))
            <p class="aligncenter">{{session('status')}}</p>
            @endif
            @csrf
            <label for="email"></label><br>
            <input type="text" name="email" id="email" placeholder="something@something.com" class="@error('email') redborder @enderror" value="{{old('email')}}"> <br>
            @error('email')
            <p class="error">{{$message}}</p>
            @enderror
            <label for="password"></label><br>
            <input type="password" name="password" id="password" value="" placeholder="Your password" class="@error('password') redborder @enderror"><br>
            @error('password')
            <p class="error">{{$message}}</p>
            @enderror
            <div class="p10"><input type="checkbox" name="remember" id="remember" class="check ">
                <label for="remember">Remember me</label>
            </div>

            <div class="center">
                <input type="submit" name="submit" value="Log In" class="buton"><br>
            </div>
        </form>
        <div class="center"><a href="{{route('register')}}" class="centrare loginlink">Need an account?</a></div>
    </div>
</div>
@endsection