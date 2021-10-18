<div>
    <div class="mt-2">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control @error('name') is-invaled @enderror" value="{{ old('name') ?? $product->name}}">
    </div>
    <div class="mt-2">
        <label for="">Price</label>
        <input type="number" name="price" class="form-control @error('price') is-invaled @enderror" value="{{ old('price') ?? $product->price}}">
    </div>
    <div class="mt-2">
        <label for="">Image</label>
        <input type="file" name="image" class="form-control @error('image') is-invaled @enderror">
    </div>
    <div class="mt-2">
        <label for="">Category</label>
        <select name="category_id" id="category_id">
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mt-2">
        <label for="">Description</label>
        <textarea name="description" id="" class="form-control @error('description') is-invaled @enderror" cols="10" rows="3">{{$product->description}}</textarea>
    </div>
</div>