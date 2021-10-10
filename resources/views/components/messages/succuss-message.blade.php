<div>
    @if (session('success'))
        <p class="alert alert-success text-center">{{session('success')}}</p>
    @endif

    @if (session('success-delete'))
        <p class="alert alert-danger text-center">{{session('success-delete')}}</p>
    @endif

    
</div>