<x-layouts.app>
    <x-slot name="title">Create Product</x-slot>
    <div class="card">
        <div class="card-head text-center">Create New Product</div>
        <div class="card-body">
            <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('products.form')
                <div class="text-center mt-5">
                    <button type="submit" class="btn btn-success mt-5">Create</button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>