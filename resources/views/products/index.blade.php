<x-layouts.app>
    <x-slot name="title">Index</x-slot>
    <table class="table table-bordered table-hover">
        <thead class=" table-info">
            <tr>
                <th class="h1 text-center">Name</th>
                <th class="h1 text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                @if ($product->is_deleted == false)
                    <tr>
                        <td class="h3 text-center">{{$product->name}}</td>
                        <td class="h3 text-center">
                            <a class="btn btn-info" href="{{route('products.show',$product->id)}}">View</a>
                            <a class="btn btn-primary" href="{{route('products.edit',$product->id)}}">Update</a>
                            <form class="d-inline" action="{{route('products.destroy' , $product->id)}}" method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</a>
                            </form>
                        </td>
                    </tr>
                @endif
            @endforeach
        </tbody>

    </table>
</x-layouts.app>
