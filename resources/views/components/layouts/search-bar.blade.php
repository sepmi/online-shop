<form class="d-flex" action="{{ route('searchResult') }}" method="POST">
    @csrf
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
    <button class="btn btn-outline-success" type="submit">Search</button>
</form>