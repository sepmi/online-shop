<div>
    
    <div class="form-group">
        <label for="">Category Name</label>
        <input type="text" class="form-control" id="" @error('title') is-invalid @enderror name="title" value="{{ old('title') ?? $category->title}}" >
    
        {{-- @error('title')
            {{$message}}
        @enderror --}}
       
    </div>

       
</div>