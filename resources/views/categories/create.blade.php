<x-layouts.app>
    <x-slot name="title">Create Category</x-slot>
    <div class="card">
        <div class="card-head text-center">Create</div>
        <div class="card-body">
            <form action="{{route('categories.store')}}" method="POST">
                @csrf
                @include('categories.form')
                <div class="text-center mt-5">
                    <button type="submit" class="btn btn-success mt-5">Create</button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>