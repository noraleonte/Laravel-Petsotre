@extends ('layouts.layout')
@section('content')

<div class="center">
    <div class="m50 tinycontainer">
        <h1 class="aligncenter">Register</h1>
        <form action="{{route('register')}}" method="post">
            @csrf
            <label for="name"></label> <br>
            <input type="text" name="name" id="name" placeholder="Your Name" class="@error('name') redborder @enderror" value="{{old('name')}}"><br>
            @error('name')
            <p class="error">{{$message}}</p>
            @enderror
            <label for="email"></label><br>
            <input type="text" name="email" id="email" placeholder="something@something.com" class="@error('email') redborder @enderror" value="{{old('email')}}"> <br>
            @error('email')
            <p class="error">{{$message}}</p>
            @enderror
            <label for="username"></label><br>
            <input type="text" name="username" id="username" placeholder="Your username" class="@error('username') redborder @enderror" value="{{old('username')}}"><br>
            @error('username')
            <p class="error">{{$message}}</p>
            @enderror
            <label for="password"></label><br>
            <input type="password" name="password" id="password" value="" placeholder="Choose a password" class="@error('password') redborder @enderror"><br>
            @error('password')
            <p class="error">{{$message}}</p>
            @enderror
            <label for="password_confirmation"></label><br>
            <input type="password" name="password_confirmation" id="password_confirmation" value="" placeholder="Confirm Password" class="@error('password') redborder @enderror"><br>

            <div class="center">
                <input type="submit" name="submit" value="Sign up" class="buton"><br>
            </div>
        </form>
        <div class="center"><a href="{{route('login')}}" class="centrare loginlink">Do you have an account?</a></div>
    </div>
</div>
@endsection