<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid ">

      
     
      
      <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
            <div class="navbar-nav mr-auto">
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
            </div>


            <div class="navbar-nav ms-auto">
                <li class="nav-item">
                    <x-layouts.search-bar></x-layouts.search-bar>
                </li>

                <li class="nav-item dropdown ">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->fname }} {{ Auth::user()->lname }}
                    </a>

                    <ul class="dropdown-menu mr-0" >                        
                        <li>
                            <form id="logout-form" action="{{ route('account') }}" method="POST" class="d-block">
                                @csrf
                                
                                <button type="submit" class="dropdown-item" >{{ __('Account') }}</button>
                            </form>
                        </li>


                        <li>                            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-block">
                                  @csrf
                                  
                                  <button type="submit" class="dropdown-item" >{{ __('Logout') }}</button>
                            </form>
                        </li>
                       
                    </ul>
                </li>
            </div>
      </div>
  </div>
</nav>