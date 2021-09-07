<x-layout title='Sign up | Crowdfund'>
    
    <nav class="navbar navbar-expand navbar-light pe-3 py-3">
        <div class="container-fluid">
            <a href="/" class="navbar-brand ps-4"><img src="{{ asset('images/logo.png') }}" class="img-fluid w-75" alt="CF"></a>

            <div class="ms-auto">
                Already on Crowdfund? <a class="btn btn-outline-success ms-2 fw-bold" href="{{ route('login') }}">Log in</a>
            </div>
        </div>
    </nav>

    <main class="container">

        <section class="row justify-content-center align-content-center"> 
            <div class="col-md-6 col-sm-8 mt-5">
                <div class="card px-4 border-0 shadow">
                    <h4 class="my-4 fw-bolder">Sign up</h4>
                    <form method="POST" action="{{ route('signup') }}">
                        @csrf
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control bg-light form-control-lg @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Name" style="height: calc(3.2rem + 2px);line-height: 1;">
                            <label for="name" class="form-label">Name</label>
                            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                         </div>

                        <div class="form-floating mb-4">
                            <input type="email" class="form-control bg-light form-control-lg @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}"  placeholder="Email" style="height: calc(3.2rem + 2px);line-height: 1;">
                            <label for="email" class="form-label">Email</label>
                            @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-floating mb-3 position-relative">
                            <input type="password" class="form-control bg-light form-control-lg @error('password') is-invalid @enderror" id="password" name="password"  placeholder="Create Password" style="height: calc(3.2rem + 2px);line-height: 1;">
                            <span class="position-absolute small text-primary togglePassword" style="right: 4%; top: 30%;cursor: pointer;">Show</span>
                            <label for="password"  class="form-label">Create Password</label>
                            @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>


                        <div class="mb-4">
                            <button type="submit" class="w-100 fw-bold btn btn-success text-white rounded btn-lg">Sign up</button>
                        </div> 
                        <div class="text-center mb-4 mx-5">
                            By signing up, you agree to Crowdfund's <a href="terms" class="text-success">Terms of Use</a>, <a href="privacy" class="text-success">Privacy Policy</a> and <a href="cookie" class="text-success">Cookie Policy</a>.
                        </div>  
                    </form>  
                </div>                          
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