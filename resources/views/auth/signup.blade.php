@section('title', 'Sign Up')
@extends('layouts.app')

@section('content')
    <main class="container">
        <h3 class="text-center my-4 strong lead">Sign up</h3>
        <section class="row justify-content-center align-content-center"> 
            <div class="col-lg-6">
                <form method="POST" action="{{ route('signup') }}" class="border p-4">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control bg-light form-control-lg @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                        @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                     </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control bg-light form-control-lg @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                        @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="mb-3">
                        <label for="emailMatch" class="form-label">Confirm Email</label>
                        <input type="email" class="form-control bg-light form-control-lg @error('email_confirmation') is-invalid @enderror" id="emailMatch" name="email_confirmation" value="{{ old('email_confirmation') }}">
                        @error('email_confirmation')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="mb-4">
                        <label for="pasword" class="form-label">Create Password</label>
                        <input type="password" class="form-control bg-light form-control-lg @error('password') is-invalid @enderror" id="pasword" name="password"  value="{{ old('password') }}">
                        @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>


                    <div class="mb-4 d-grid">
                        <button type="submit" class="btn btn-success btn-block text-white rounded-pill btn-lg">Sign up</button>
                    </div> 
                    <div class="text-center mb-4 mx-5">
                        By signing up, you agree to Crowdfund's <a href="terms" class="text-success">Terms of Use</a>, <a href="privacy" class="text-success">Privacy Policy</a> and <a href="cookie" class="text-success">Cookie Policy</a>.
                    </div>  
                </form>
                <div class="my-3 text-center">
                    <p>Already on Crowdfund? <a class="text-success" href="{{ route('login') }}">Log in</a></p> 
                </div>        
            </div>    
        </section>    
    </main>    
@endsection