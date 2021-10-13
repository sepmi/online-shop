<x-layouts.app>
    <x-slot name="title">user</x-slot>
    <div class="card-group grid">
        @foreach ($products as $product)
            @if ($product->is_deleted == false)
            <div class="card col-3">
                <img src="" alt="" class="card-img-top w-100 h-100">
                <div class="card-body">       
                    <h5 class="card-title">{{$product->name}}</h5>
                    <p class="card-text">{{$product->price}}</p>
                    <p class="card-text">{{$product->description}}</p>
                </div>
            </div>
            @endif
        @endforeach
    </div>
</x-layouts.app>
