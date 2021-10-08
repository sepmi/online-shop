
<x-layouts.app>
    <x-slot name="title">Category</x-slot>
    
    <div class="card "  >
        <div class="card-header text-center">
           Category name : {{$category->title}}
        </div>
        <div class="card-body">
            
            
            <a type="button" href="/categories/{{$category->id}}/edit" class="btn btn-primary">Edit</a>
        </div>
      </div>

   
</x-layouts.app>