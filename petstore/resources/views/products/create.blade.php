@extends ('layouts.layout')
@section('content')
<div class="center">
    <div class="m50 tinycontainer">
        <h1 class="aligncenter">Add product</h1>
        <form action="/products" method="post">
            @csrf
            <label for="name"></label><br>
            <input type="text" name="name" id="name" placeholder="Product name" class="@error('name') redborder @enderror" value="{{old('name')}}"> <br>
            @error('name')
            <p class="error">{{$message}}</p>
            @enderror

            <label for="category"></label>
            <select name="category" id="category">
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>

            <label for="description"></label><br>
            <input type="text" name="description" id="description" placeholder="description" class="@error('description') redborder @enderror" value="{{old('description')}}"> <br>
            @error('description')
            <p class="error">{{$message}}</p>
            @enderror

            <label for="price"></label><br>
            <input type="number" name="price" id="price" placeholder="price" class="@error('price') redborder @enderror" value="{{old('price')}}"> <br>
            @error('price')
            <p class="error">{{$message}}</p>
            @enderror

            <label for="img"></label><br>
            <input type="text" name="img" id="img" placeholder="Image link" class="@error('img') redborder @enderror" value="{{old('img')}}"> <br>
            @error('description')
            <p class="error">{{$message}}</p>
            @enderror

            <div class="center">
                <input type="submit" name="submit" value="Add product" class="buton"><br>
            </div>
        </form>

    </div>
</div>

@endsection