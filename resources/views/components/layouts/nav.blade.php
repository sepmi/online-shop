<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid ">
  
        
       
        
        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
              <div class="navbar-nav me-auto">
                  <a class="nav-link active" aria-current="page" href="{{route('index')}}">Home(عادی)</a>


                  
  
  
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
                          <a class="dropdown-item" href="{{route('products.index')}}">Show </a>
                        </li>
                      </ul>
                    </li>


                    
              </div>

              <div class="navbar-nav ms-auto">
                
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                
            </div>
        </div>
    </div>
  </nav>