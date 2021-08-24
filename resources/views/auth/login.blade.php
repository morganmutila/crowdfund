@section('title', 'Login')
@extends('layouts.app')
@section('content')
    <main class="container my-4">
        <h3 class="text-center mb-4 strong lead">Log in</h3>
        
        @include('layouts.status-block')

        <section class="row justify-content-center align-content-center"> 
            <div class="col-6">
                <form method="POST" action="{{ route('login') }}" class="border p-4">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control bg-light form-control-lg @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                        @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                     </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control bg-light form-control-lg @error('password') is-invalid @enderror" id="password" name="password">
                        @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="mb-4 d-flex justify-content-between">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="rememberMe" name="remember">
                          <label class="form-check-label" for="rememberMe">Remember me</label>
                        </div>
                        <a class="text-success" href="{{ route('password.request') }}">
                            Forgot password?
                        </a>
                    </div>
                    <div class="mb-4 d-grid">
                        <button type="submit" class="btn btn-success btn-block text-white rounded-pill btn-lg">Log in</button>
                    </div> 
                    <div class="mb-3 text-center">
                        New to Crowdfund? <a class="text-success" href="{{ route('signup') }}">                  Sign up
                        </a> 
                    </div>    
                </form>
            </div>    
        </section>  
    </main>      
@endsection