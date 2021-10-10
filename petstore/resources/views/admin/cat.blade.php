@extends ('layouts.layout')
@section('content')

<div class="center">
    <div class="m50 tinycontainer">
        <h1 class="aligncenter">Add a category</h1>
        <form action="/categories/add" method="post">

            @csrf
            <label for="name"></label><br>
            <input type="text" name="name" id="name" placeholder="Category name" class="@error('category') redborder @enderror" value=""> <br>
            @error('category')
            <p class="error">{{$message}}</p>
            @enderror


            <div class="center">
                <input type="submit" name="submit" value="Add category" class="buton"><br>
            </div>
        </form>

    </div>
</div>
@endsection