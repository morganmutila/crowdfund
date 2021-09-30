<x-layout title='Login | Crowdfund'>

    <nav class="navbar navbar-expand navbar-light pe-3 py-3">
        <div class="container-fluid">
            <a href="/" class="navbar-brand ps-4"><img src="{{ asset('images/logo.png') }}" class="img-fluid w-75" alt="CF"></a>
            <div class="ms-auto">
                New to Crowdfund? <a class="btn btn-outline-success ms-2 fw-bold" href="{{ route('signup') }}">Sign up</a>
            </div>
        </div>
    </nav>
    
    <main class="container my-4">

        
        <x-status/>

        @error('login_failed')
            <div class="alert alert-danger">
                {{ $message }}
            </div>                 
        @endif  

        <section class="row justify-content-center align-content-center">
            <div class="col-md-5 col-sm-8 mt-5">
            <div class="card px-4 border-0 shadow">
                <h4 class="my-4 fw-bolder">Log in</h4>                    
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control bg-light form-control-lg @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}"  placeholder="Email" style="height: calc(3.2rem + 2px);line-height: 1;">
                        <label for="email"  class="form-label">Email</label>
                        @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                     </div>
                    <div class="form-floating mb-3 position-relative">
                        <input type="password" class="form-control bg-light form-control-lg @error('password') is-invalid @enderror" id="password" name="password"  placeholder="Password" style="height: calc(3.2rem + 2px);line-height: 1;">
                        <span class="position-absolute small fw-bold text-primary togglePassword" style="right: 4%; top: 30%;cursor: pointer;">Show</span>
                        <label for="password"  class="form-label">Password</label>
                        @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="mb-4">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input me-2" id="rememberMe" name="remember" style="width: 1.5em;height: 1.5em;">
                          <label class="form-check-label mt-1" for="rememberMe" >Remember me</label>
                        </div>
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="mb-3 w-100 btn btn-success text-white fw-bold btn-block rounded btn-lg">Log in</button>

                        <a class="text-success fw-bolder text-decoration-none" href="{{ route('password.request') }}">
                            Forgot password?
                        </a>
                    </div>
                </form>
            </div> 
        </section>
    </main>
    <script type="text/javascript">

        const togglePassword = document.querySelector('.togglePassword');

        const input = document.querySelector('[name = password]');

        let password = true;

        togglePassword.addEventListener("click", function () {
            if(password){
                input.setAttribute("type", "text");
                togglePassword.innerHTML = "Hide";
            }else{
                input.setAttribute("type", "password");
                togglePassword.innerHTML = "Show";
            }

            password = !password;
        })

    </script>
</x-layout>