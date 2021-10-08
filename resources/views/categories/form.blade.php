<div>
    <div>
        <label for="name">Category Name</label>
    </div>
    <div>
        <input type="text" name="name" class="form-control @error('name') is-invaled @enderror" value="{{ old('name') ?? $category->name}}">
    </div>
</div>