<div>
    @if (Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    @if (Session::has('deleted'))
        <div class="alert alert-danger">{{Session::get('deleted')}}</div>
    @endif

    @if ($errors->any())
        @foreach ($errors->any() as $error )
            <div class="alert alert-danger"> {{$error}}</div>
        @endforeach
    @endif
</div>