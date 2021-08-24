<nav class="navbar navbar-expand-md navbar-light bg-white mb-3 border-bottom">
    <div class="container">
        <a href="/" class="navbar-brand m-0 text-uppercase"><img src="{{ asset('images/logo.png') }}" class="img-fluid w-75" alt="CF"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse py-1" id="navbar">
            <ul class="navbar-nav me-2">
                <li class="nav-item"><a href="/discover" class="nav-link px-3 text-dark fw-bold">Discover</a></li>
                {{-- <li class="nav-item dropdown has-megamenu">
                    <a class="nav-link px-3 fw-bold text-dark dropdown-toggle" href="#" data-bs-toggle="dropdown">Explore<span class="ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/></svg></span></a>
                        <div class="dropdown-menu rounded-0 border collapse megamenu slide" role="menu">
                            <section class="container px-3">
                                <div class="row g-3">
                                    <ul class="home-category d-flex justify-content-between align-items-center flex-wrap">
                                        @foreach($categories as $category)
                                            <li><a href="{{ route('discover', ['category' => $category->id]) }}" class="text-capitalize">{{ $category->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </section>    
                        </div> 
                </li>  --}}               
                <li class="nav-item"><button class="btn text-dark bg-transparent border-0" type="button" data-bs-toggle="collapse" data-bs-target="#searchForm" style="box-shadow: none;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                    </button>
                </li>
            </ul>
            <div class="collapse fade w-25" id="searchForm">
                <form class="mb-3 mb-lg-0">
                  <input type="search" class="form-control" placeholder="Find a project">
                </form>
            </div>    
           
                <ul class="navbar-nav ms-md-auto">
                    <li class="nav-item ms-md-auto">
                        <a href="{{ route('projects.create') }}" class="nav-link px-3 text-dark fw-bold">Start a Project</a>
                    </li>
                    @auth
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link text-dark fw-bold dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('images/profile.png') }}" alt="photo" class="rounded-circle my-n4 me-2" style="width:35px;height:35px;">
                                {{ Auth::user()->name }}<span class="ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/></svg></span>
                            </a>                           
                            <ul class="dropdown-menu dropdown-menu-end shadow border-light" style="width:200px;top:48px">
                                <li><a class="dropdown-item py-2" href="{{ route('user-projects', ['user' => Auth::user()->id]) }}">My projects</a></li>
                                <li><a class="dropdown-item py-2" href="{{ route('profile', ['user' => Auth::user()->id]) }}">Profile</a></li>
                                <li><a class="dropdown-item py-2" href="#">Settings</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item py-2">Log out</button>
                                    </form>
                                </li>
                            </ul>  
                        </li>
                    @endauth     
                </ul>
            
            @guest
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link text-dark px-2 fw-bold">Log In</a></li>
                    <li class="nav-item"><a href="{{ route('signup') }}" class="nav-link link-dark px-3 ms-2 btn btn-success text-white rounded-pill">Sign Up</a></li>
                </ul>
            @endguest 
        </div>
    </div>
</nav> 