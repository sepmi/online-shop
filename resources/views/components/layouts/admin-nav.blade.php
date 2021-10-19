<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid ">

      
     
      
      <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="{{route('index')}}">Home(admin)</a>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Category
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="{{route('categories.create')}}">Create</a></li>
                      <li><a class="dropdown-item" href="{{route('categories.index')}}">Show Categories</a></li>
                      
                    </ul>
                </li>



                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Product
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="{{route("products.create")}}">Create</a></li>
                      <li><a class="dropdown-item" href="{{route('products.index')}}">Show </a></li>
                    </ul>
                </li>


                <form class="d-inline"action="{{route('userMode')}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger" >Go to User Mode</button>
                </form>


                <div class="navbar-nav">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                    </form>
                </div>

            </div>
      </div>
  </div>
</nav>