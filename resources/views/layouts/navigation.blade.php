<nav class="navbar navbar-expand-md navbar-light bg-white border-bottom px-3">
    <div class="container-fluid">
        <a href="/" class="navbar-brand mr-2 pb-2"><img src="{{ asset('images/logo.png') }}" class="img-fluid" alt="CF"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse py-1" id="navbar">
            <ul class="navbar-nav me-2">
                <li class="nav-item dropdown d-none d-md-inline-block">
                    <a class="nav-link px-md-3 mx-2 fw-bold text-dark dropdown-toggle" href="#" data-bs-toggle="dropdown">Explore<span class="ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/></svg></span></a>
                        <div class="dropdown-menu shadow rounded border collapse slide" role="menu">
                            @foreach($categories as $category)
                                <a href="{{ route('discover', ['category' => $category->id]) }}" class="text-capitalize dropdown-item">{{ $category->name }}</a>
                            @endforeach
                        </div> 
                </li> 
                <li class="nav-item"><a href="{{ url('/discover') }}" class="nav-link fw-bold px-md-3 mx-2 text-dark">Discover</a></li>
                <li class="nav-item"><a href="{{ url('/blog') }}" class="nav-link px-md-3 fw-bold mx-2 text-dark ">Blog</a></li>              
            </ul>   
           
            <ul class="navbar-nav ms-md-auto">
                <li class="nav-item ms-md-auto">
                    <a href="{{ route('projects.create') }}" class="nav-link px-md-3 fw-bold text-dark">Start a Project</a>
                </li>
                @auth
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link text-dark dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="" alt="photo" class="rounded-circle my-n4 me-2" style="width:40px;height:35px;">
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
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link fw-bold text-dark px-md-3 mx-2">Log In</a></li>
                    <li class="nav-item"><a href="{{ route('signup') }}" class="btn btn-success text-white rounded fw-bold">Sign Up</a></li>
                </ul>
            @endguest 
        </div>
    </div>
</nav> 