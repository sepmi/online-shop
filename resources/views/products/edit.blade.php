<x-layouts.app>
    <x-slot name='title'>Edit Product</x-slot>
    <div class="card">
        <div class="card-head text-center">Edit Product {{$product->name}}</div>
        <div class="card-body">
            <form action="{{route('products.update', $product->id)}}" method="POST">
                @csrf
                @method('PATCH')
                @include('products.form')
                <div class="text-center mt-5">
                    <button type="submit" class="btn btn-success mt-5">Update</button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>