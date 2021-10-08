@if (session('success'))
<p class="alert alert-success sepehr3">{{session('success')}}</p>
@endif

@if ($errors->any())
@foreach ($errors->all() as $error)
    <p class="alert alert-danger sepehr3"> {{$error}} </p>
@endforeach
@endif