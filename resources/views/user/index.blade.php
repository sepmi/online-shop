<x-layouts.app>

    <x-slot name="title"> Account Information</x-slot>

    <div class="card w-50 m-auto">
        <div class="card-body text-center">
            <h5 class="card-title">personal information</h5>
            <form action="{{route('accountStore',$user->id)}}" method="POST">
                @csrf
                {{-- @method("PATCH") --}}
                
                    <div class="form-group row p-1">
                        <label for="">First Name</label>
                        <input type="text" class="form-control" id=""  name="fname" value="{{ old('fname') ?? $user->fname}}" >
                    </div>

                    <div class="form-group row p-1">
                        <label for="">Last Name</label>
                        <input type="text" class="form-control" id=""  name="lname" value="{{ old('lname') ?? $user->lname}}" >
                    </div>

                    <div class="form-group row p-1">
                        <label for="">Email</label>
                        <input type="email" class="form-control" id=""  name="email" value="{{ old('email') ?? $user->email}}" >
                    </div>

                    <button type="submit" class="btn btn-primary mt-5 ">Edit</button>
            

            </form>
          </div>
    </div>
</x-layouts.app>