@extends ('layouts.layout')
@section('content')
<div class="center">
    <div class="m50 tinycontainer">
        <h1 class="aligncenter">Edit product</h1>
        <form action="/products/store_edit/{{$product->id}}" method="post">
            @csrf
            <label for="name"></label><br>
            @if(old('name'))
            <input type="text" name="name" id="name" placeholder="Product name" class="@error('name') redborder @enderror" value=" {{old('name')}}"> <br>
            @else
            <input type="text" name="name" id="name" placeholder="Product name" class="@error('name') redborder @enderror" value=" {{$product->name}}"> <br>
            @endif
            @error('name')
            <p class="error">{{$message}}</p>
            @enderror

            <label for="category"></label>
            <select name="category" id="category">
                @foreach($categories as $category)
                <option value="{{$category->id}}" <?php if ($category->id == $product->category) { ?> selected <?php } ?>>{{$category->name}}</option>
                @endforeach
            </select>

            <label for="description"></label><br>
            @if(old('description'))
            <input type="text" name="description" id="description" placeholder="description" class="@error('description') redborder @enderror" value="{{old('description')}}"> <br>
            @else
            <input type="text" name="description" id="description" placeholder="description" class="@error('description') redborder @enderror" value="{{$product->description}}"> <br>
            @endif
            @error('description')
            <p class="error">{{$message}}</p>
            @enderror

            <label for="price"></label><br>
            @if(old('price'))
            <input type="number" name="price" id="price" placeholder="price" class="@error('price') redborder @enderror" value="{{old('price')}}"> <br>
            @else
            <input type="number" name="price" id="price" placeholder="price" class="@error('price') redborder @enderror" value="{{$product->price}}"> <br>
            @endif
            @error('price')
            <p class="error">{{$message}}</p>
            @enderror

            <label for="img"></label><br>
            @if(old('img'))
            <input type="text" name="img" id="img" placeholder="Image link" class="@error('img') redborder @enderror" value="{{old('img')}}"> <br>
            @else
            <input type="text" name="img" id="img" placeholder="Image link" class="@error('img') redborder @enderror" value="{{$product->img}}"> <br>
            @endif
            @error('img')
            <p class="error">{{$message}}</p>
            @enderror

            <div class="center">
                <input type="submit" name="submit" value="Add product" class="buton"><br>
            </div>
        </form>

    </div>
</div>

@endsection