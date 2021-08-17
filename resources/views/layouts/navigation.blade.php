<nav class="navbar navbar-expand-lg navbar-light bg-white py-2 mb-3 border-bottom">
    <div class="container-fluid">
        <a href="/" class="navbar-brand m-0 text-uppercase"><img src="{{ asset('images/logo.png') }}" class="img-fluid w-75" alt="CF"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse py-1" id="navbar">
            <ul class="navbar-nav me-2">
                <li class="nav-item"><a href="/discover" class="nav-link px-3 text-dark fw-bold">Discover</a></li>
                <li class="nav-item dropdown has-megamenu">
                    <a class="nav-link px-3 fw-bold text-dark dropdown-toggle" href="#" data-bs-toggle="dropdown">Explore<span class="ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/></svg></span></a>
                    <div class="dropdown-menu rounded-0 border collapse megamenu slide" role="menu">
                        <section class="container p-4">
                            <div class="row g-3">
                                <div class="col">
                                    <div class="col-megamenu v-menu">
                                        <h5 class="title">Title Menu One</h5>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                        </ul>
                                    </div>  <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                                <div class="col">
                                    <div class="col-megamenu v-menu">
                                        <h5 class="title">Title Menu Two</h5>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                        </ul>
                                    </div>  <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                                <div class="col">
                                    <div class="col-megamenu v-menu">
                                        <h5 class="title">Title Menu Three</h5>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                        </ul>
                                    </div>  <!-- col-megamenu.// -->
                                </div>    
                                <div class="col">
                                    <div class="col-megamenu v-menu">
                                        <h5 class="title">Title Menu Four</h5>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                        </ul>
                                    </div>  <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                            </div><!-- end row --> 
                        </section>    
                    </div> <!-- dropdown-mega-menu.// -->
                </li>

                <li class="nav-item"><a href="{{ route('project.create') }}" class="nav-link px-3 text-dark fw-bold">Start a Project</a></li>
                <li class="nav-item"><button class="btn text-dark bg-transparent border-0" type="button" data-bs-toggle="collapse" data-bs-target="#searchForm" style="box-shadow: none;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                    </button>
                </li>
            </ul>
            @if(!request()->routeIs('login') && !request()->routeIs('signup'))
                <div class="collapse fade w-50" id="searchForm">
                    <form class="mb-3 mb-lg-0">
                      <input type="search" class="form-control bg-light" placeholder="Find a project" aria-label="Search">
                    </form>
                </div>    
                @auth
                    <ul class="navbar-nav ms-md-auto">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link text-dark fw-bold dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}<span class="ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/></svg></span>
                            </a>                           
                            <ul class="dropdown-menu dropdown-menu-end shadow border-light" aria-labelledby="dropdownUser1" style="width:200px;top:48px">
                                <li><a class="dropdown-item py-2" href="#">My projects</a></li>
                                <li><a class="dropdown-item py-2" href="#">Profile</a></li>
                                <li><a class="dropdown-item py-2" href="#">Settings</a></li>
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
                    <ul class="navbar-nav ms-md-auto">
                        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link text-dark px-2 fw-bold">Log In</a></li>
                        <li class="nav-item"><a href="{{ route('signup') }}" class="nav-link link-dark px-3 ms-2 btn btn-success text-white rounded-pill">Sign Up</a></li>
                    </ul>
                @endguest 
            
            @elseif(request()->routeIs('signup'))
                <div class="navbar-text ms-md-auto">Already have an account? <a href="{{ route('login') }}" class="link-success">Log in</a></div>
            @elseif(request()->routeIs('login'))
                <div class="navbar-text ms-md-auto">Don't have an account? <a href="{{ route('signup') }}" class="link-success">Sign up</a></div>
            @endif    
        </div>
    </div>
</nav> 