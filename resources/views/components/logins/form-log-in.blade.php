
<form class=" card p-4  m-auto sepehr3"  action="{{route('loginCheck')}}" method="POST">
    @csrf


    <div class="form-group row p-3">
        <label class="col-4" for="">Email </label>
        <input type="email" class="col-8" id="" name="email" placeholder="Enter email">
        
    </div>

    
    <div class="form-group row p-3">
        <label class="col-4" for="">Password</label>
        <input type="password" class="col-8" id="" name="password" placeholder="Password">
    </div>
    
    <div class="form-group row p-3">
        <a href="{{route("signup")}}">create an account?</a>
    </div>
   
    <button type="submit" class="btn btn-primary">Login</button>


</form>
