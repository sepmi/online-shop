<x-layouts.app>
    <x-slot name="title">Edit Category</x-slot>
    
    {{-- <div class="card "  >
        <div class="card-header text-center">
          Edit Category
        </div>
        <div class="card-body">
            
            

        </div>
      </div> --}}


      <table class="table table-bordered table-hover text-center">
        <thead class="table-dark">
            <tr>
                <th class="h1">Name</th>
                
                @if (Auth::check() && Auth::user()->is_admin == 1)

                    <th class="h1">Actions</th>

                @endif
            </tr>

        </thead>

        <tbody>
            @foreach ( $categories as $category)
                
                @if ($category->is_deleted == false)
                <tr>
                    <td>{{$category->title}}({{count($category->products)}})</td>
                    

                        @if (Auth::check() && Auth::user()->is_admin == 1)
                            <td>

                                <a class="btn btn-info" href="{{route('categories.edit',$category ->id)}}">Edit</a>
                                
                                <form class="sepehr2"action="{{route('categories.destroy',$category ->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger" >Delete</button>
                                </form>
                            </td>
                        @endif

                    
                </tr>
                @endif

            @endforeach

        </tbody>
    </table>
   
</x-layouts.app>