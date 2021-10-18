<div>
    @if (Session::has('success'))
        <div class="alert alert-success text-center">{{Session::get('success')}}</div>
    @endif
    @if (Session::has('deleted'))
        <div class="alert alert-danger text-center">{{Session::get('deleted')}}</div>
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger text-center"> {{$error}}</div>
        @endforeach
    @endif
</div>