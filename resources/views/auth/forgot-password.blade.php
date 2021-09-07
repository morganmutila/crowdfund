<x-layout title='Forgot Password | Crowfund' bg_color='red'>

    <nav class="navbar navbar-expand navbar-light">
        <div class="container-fluid">
            <a href="/" class="navbar-brand ps-4"><img src="{{ asset('images/logo.png') }}" class="img-fluid w-75" alt="CF"></a>
        </div>
    </nav>

    @if(session()->has('status'))
        <div class="alert alert-info">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                            </symbol>
                        </svg>
                        <svg class="bi flex-shrink-0 me-2" width="20" height="20" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                        <span class="text-dark fs-5 align-middle">{{ session()->get('status') }}
                    </div>
                </div>    
            </div>
        </div>
    @endif  
    <main class="container my-4">
        <section class="row justify-content-center align-items-center flex-column"> 
            <div class="col-md-6 col-sm-8"> 
                <div class="card border-0 shadow p-4">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <h4 class="my-4 fw-bolder">Password Reset</h4>
                        <div class="ms-auto"><a class="text-success" href="{{ route('login') }}">Back to login</a>
                        </div>
                    </div> 

                    <p class="card-text text-muted">Enter your email, and we’ll send you instructions on how to reset your password.</p>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-floating mb-4">
                            <input type="email" class="form-control bg-light @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Email" style="height: calc(3.2rem + 2px);line-height: 1;">
                            @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            <label for="email" class="form-label">Email</label>

                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-success w-100 text-white rounded btn-lg fw-bold">Send password reset link</button>
                        </div> 
                    </form> 
                    <p class="card-text small">Having problems? Please try again later, or <a href="#" class="card-link">contact support.</a></p>
                </div>    
            </div>
        </section>   
    </main>       

</x-layout>
