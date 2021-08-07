<nav class="navbar navbar-expand-lg navbar-light bg-white py-2 mx-2 mb-3 border-bottom">
    <div class="container-fluid">
        <a href="/" class="navbar-brand text-uppercase">Cf</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse py-1" id="navbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a href="/discover" class="nav-link px-3 link-dark fw-bold">Discover</a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link px-3 fw-bold link-dark dropdown-toggle" id="exploreCategories" data-bs-toggle="dropdown" aria-expanded="false">Explore</a>
                    <ul class="dropdown-menu shadow border-light text-small" aria-labelledby="exploreCategories">
                        <li><a class="dropdown-item" href="#">Category 1</a></li>
                        <li><a class="dropdown-item" href="#">Category 2</a></li>
                        <li><a class="dropdown-item" href="#">Category 3</a></li>
                        <li><a class="dropdown-item" href="#">Category 4</a></li>
                        <li><a class="dropdown-item" href="#">Category 5</a></li>
                        <li><a class="dropdown-item" href="#">Category 6</a></li>
                        <li><a class="dropdown-item" href="#">Category 7</a></li>
                        <li><a class="dropdown-item" href="#">Category 8</a></li>
                    </ul>
                </li class="nav-item">
                <li class="nav-item"><a href="/create" class="nav-link px-3 link-dark fw-bold">Start a project</a></li>
            </ul>
            @if(!request()->routeIs('login') && !request()->routeIs('signup'))
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 w-25">
                  <input type="search" class="form-control bg-light rounded-pill" placeholder="Find a project" aria-label="Search">
                </form>
                @auth
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link fw-bold dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>                           
                            <ul class="dropdown-menu dropdown-menu-end shadow border-light" aria-labelledby="dropdownUser1" style="width:200px;top:48px">
                                <li><a class="dropdown-item py-2 fw-bold" href="#">{{ Auth::user()->name }}</a></li>
                                <li><a class="dropdown-item py-2" href="#">Start a project</a></li>
                                <li><a class="dropdown-item py-2" href="#">Profile</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item py-2">Log out</button>
                                    </form>
                                </li>
                            </ul>  
                        </li>    
                    </ul>
                @endauth 
                @guest
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link link-dark px-2 fw-bold">Log In</a></li>
                        <li class="nav-item"><a href="{{ route('signup') }}" class="nav-link link-dark px-3 ms-2 btn btn-success text-white rounded-pill">Sign Up</a></li>
                    </ul>
                @endguest 
            
            @elseif(request()->routeIs('signup'))
                <div class="navbar-text">Already have an account? <a href="{{ route('login') }}" class="link-success">Log in</a></div>
            @elseif(request()->routeIs('login'))
                <div class="navbar-text">Don't have an account? <a href="{{ route('signup') }}" class="link-success">Sign up</a></div>
            @endif    
        </div>
    </div>
</nav> 