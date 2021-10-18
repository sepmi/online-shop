<x-layouts.app>
    <x-slot name="title">Show Product</x-slot>
    <div class="card-group">
        <div class="card">
            <img src="{{asset('images/'.$product->image->image)}}" alt="" class="card-img-top w-100 h-100">
            <div class="card-body"> 
                <label for="name">Name</label>
                <h5 class="card-title">{{$product->name}}</h5>
                <label for="price">Price</label>
                <p class="card-text">{{$product->price}}</p>
                <p class="card-text">{{$product->description}}</p>
            </div> 
        </div>
    </div>
</x-layouts.app>
