<nav class="p-3 mb-3 border-bottom bg-white">
    <div class="container-fluid">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none h4">Cf</a>

        <ul class="nav col-12 col-lg-auto ms-lg-4 me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/discover" class="nav-link px-2 link-dark">Discover</a></li>
          <li><a href="/discover" class="nav-link px-2 link-dark dropdown-toggle" id="exploreCategories" data-bs-toggle="dropdown" aria-expanded="false">Explore</a>
              <ul class="dropdown-menu shadow border-0 animate slideIn text-small" aria-labelledby="exploreCategories" style="">
                <li><a class="dropdown-item" href="#">Category 1</a></li>
                <li><a class="dropdown-item" href="#">Category 2</a></li>
                <li><a class="dropdown-item" href="#">Category 3</a></li>
                <li><a class="dropdown-item" href="#">Category 4</a></li>
                <li><a class="dropdown-item" href="#">Category 5</a></li>
                <li><a class="dropdown-item" href="#">Category 6</a></li>
                <li><a class="dropdown-item" href="#">Category 7</a></li>
                <li><a class="dropdown-item" href="#">Category 8</a></li>
              </ul>
          </li>
          <li><a href="/create" class="nav-link px-2 link-dark">Start a project</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 w-25">
          <input type="search" class="form-control bg-light rounded-pill" placeholder="Find a project" aria-label="Search">
        </form>
            @auth
                <div class="dropdown text-end">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                   
                    <ul class="dropdown-menu shadow border-0 animate slideIn text-small" aria-labelledby="dropdownUser1" style="">
                        <li><a class="dropdown-item" href="#"><strong>{{ Auth::user()->name }}</strong></a></li>
                        <li><a class="dropdown-item" href="#">Start a project</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-white link-dark">Log out</button>
                            </form>
                        </li>
                    </ul>  
                </div>
            @endauth 
            @guest
                <ul class="nav">
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link link-dark px-2">Log In</a></li>
                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link link-dark px-3 ms-2 btn btn-success text-white rounded-pill">Sign Up</a></li>
                </ul>
            @endguest 
      </div>
    </div>
</nav>