<x-layouts.app>
    <x-slot name="title">Show Category</x-slot>
    <table class="table">
        <thead class=" table-dark">
            <tr>
                <th class="h1 text-center">Name</th>
                <th class="h1 text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="h3 text-center">{{$category->name}}</td>
                <td class="h3 text-center">
                    <a class="btn btn-primary" href="{{route('categories.edit',$category->id)}}">Update</a>
                    <a class="btn btn-danger" href="{{route('categories.destroy',$category->id)}}">Delete</a>
                </td>
            </tr>
        </tbody>

    </table>
</x-layouts.app>