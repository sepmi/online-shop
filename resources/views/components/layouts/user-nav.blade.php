<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid ">
  
        
       
        
        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
              <div class="navbar-nav me-auto">
                  <a class="nav-link active" aria-current="page" href="{{route('index')}}">Home(user)</a>


                  
  
  
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Categoreis
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        
                        <li>
                            <a class="dropdown-item" href="{{route('categories.index')}}">Show </a>
                        </li>
                        
                      </ul>
                    </li>
  
  
  
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Products
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <li><a class="dropdown-item" href="{{route('products.index')}}">Show </a></li>
                        </li>
                      </ul>
                    </li>


                    
              </div>

              <div class="navbar-nav ms-auto">
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