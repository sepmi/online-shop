
<form class=" card p-4  m-auto sepehr3"  action="{{route('storeUser')}}" method="POST">
    @csrf

    <div class="form-group row p-3 sm">
            <label class="col-4" for="">First name </label>
            <input class="col-8" type="text" name="fname"> 
    </div>


    <div class="form-group row p-3">
        <label class="col-4" for="">Last name </label>
        <input class="col-8" type="text" name="lname"> 
    </div>


    <div class="form-group row p-3">
        <label class="col-4" for="">Email </label>
        <input type="email" class="col-8" id="" name="email" placeholder="Enter email">
        
    </div>

    
    <div class="form-group row p-3">
        <label class="col-4" for="">Password</label>
        <input type="password" class="col-8" id="" name="password" placeholder="Password">
    </div>
    
   
    <button type="submit" class="btn btn-primary">Submit</button>


</form>


{{--  
<form class=" card p-4  m-auto sepehr3">

 <div class=" row ">
    <label for="staticEmail" class="col-sm-4 col-form-label">Email</label>
    <div class="col-sm-8 ">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
    </div>
  </div>
  <div class=" row">
    <label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="inputPassword">
    </div>
  </div>
</form> --}}