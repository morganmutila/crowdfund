<header id="home-cover" class="bg-light mb-5 position-relative" style="background-image: url({{ asset('images/3.jpg') }}); background-color: #444242;">
    <div style="background: rgba(0, 0, 0, .4);" class="position-absolute bottom-0 left-0 top-0 w-100 d-flex flex-column">
        @includeWhen(request()->routeIs('home'), 'layouts.home-navigation')
        <div class="container-lg mt-5 d-flex align-items-center text-white justify-content-start">
            <div class="col-md-6">
                <h1 class="display-5 fw-bolder mb-5">Where great ideas are funded.</h1>
                <a class="btn bg-success btn-success bg-opacity-75 text-opacity-75 text-white btn-lg py-2 fs-4 px-5" href="{{ route('projects.create') }}">Start a project</a>
            </div>
        </div>
    </div>
</header>