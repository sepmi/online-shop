<x-layouts.app>
    <x-slot name='title'>Edit Category</x-slot>
    <div class="card">
        <div class="card-head text-center">Edit</div>
        <div class="card-body">
            <form action="{{route('categories.update', $category->id)}}" method="POST">
                @csrf
                @method('PATCH')
                @include('categories.form')
                <div class="text-center mt-5">
                    <button type="submit" class="btn btn-success mt-5">Update</button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>