<x-layouts.app>
    <x-slot name="title">Show Product</x-slot>
    <div>
        <div>
            <label for="name">Name</label>
            <div>{{$product->name}}</div>
        </div>
        <div>
            <label for="price">Price</label>
            <div>{{$product->name}}</div>
        </div>
        <div>
            <label for="image">Image</label>
            <img src="{{asset('images/'.$product->image->image)}}" alt="">
        </div>
        <div>
            <label for="category_id">Category</label>
            <div>{{$product->name}}</div>
        </div>
        <div>
            <label for="description">Description</label>
            <div>{{$product->name}}</div>
        </div>
    </div>
</x-layouts.app>