<div>
    @if ('success')
        <p class="alert alert-success">{{session('success')}}</p>
    @endif

    @if ($errors->any())
        @foreach ($errors->any() as $error )
            <p class="alert alert-danger"> {{$error}}</p>
        @endforeach
    @endif
</div>