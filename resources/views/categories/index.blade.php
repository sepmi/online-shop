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
            @foreach ($categories as $category)
                <tr>
                    <td class="h3 text-center">{{$category->name}}</td>
                    <td class="h3 text-center">
                        <a class="btn btn-info" href="{{route('categories.show',$category->id)}}">View</a>
                        <a class="btn btn-primary" href="{{route('categories.edit',$category->id)}}">Update</a>
                        <a class="btn btn-danger" href="{{route('categories.destroy',$category->id)}}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
</x-layouts.app>
