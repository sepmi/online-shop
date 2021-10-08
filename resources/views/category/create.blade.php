

<x-layouts.app>
    <x-slot name="title">Create Category</x-slot>
    
    <div class="card "  >
        <div class="card-header text-center">
          Create Category
        </div>
        <div class="card-body">
            
            <form action="{{route('categories.store')}}" method="POST">
              @csrf
              @include('category.form')
              <button type="submit" class="btn btn-primary">Create</button>
            </form>

        </div>
      </div>

   
</x-layouts.app>