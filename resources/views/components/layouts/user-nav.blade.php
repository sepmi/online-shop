<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid ">
  
        
       
        
        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
              <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page" href="{{route('index')}}">Home(user)</a>
  
  
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Category
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        {{-- <li><a class="dropdown-item" href="{{route('categories.create')}}">Create</a></li> --}}
                        <li><a class="dropdown-item" href="{{route('categories.index')}}">Show Categories</a></li>
                        
                      </ul>
                    </li>
  
  
  
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Product
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        {{-- <li><a class="dropdown-item" href="">Create</a></li> --}}
                        {{-- <li><a class="dropdown-item" href="{{route('categories.index')}}">Posts</a></li> --}}
                        <li><a class="dropdown-item" href="#">Show Products</a></li>
                      </ul>
                    </li>


                    <form class="d-inline"action="{{route('adminMode')}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger" >Go to Admin Mode</button>
                    </form>
              </div>
        </div>
    </div>
  </nav>