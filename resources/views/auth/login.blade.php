@extends('layouts.app')
@section('content')
<div><h3 class="text-center mb-4 strong lead">Log in</h3></div>
<section class="row justify-content-center align-content-center"> 
    <div class="col-lg-6">

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
                  <input type="checkbox" class="form-check-input" id="dropdownCheck2" name="remember">
                  <label class="form-check-label" for="dropdownCheck2">Remember me</label>
                </div>
                <a class="text-success" href="{{ route('password.request') }}">
                    Forgot password?
                </a>
            </div>
            <div class="mb-4 d-grid">
                <button type="submit" class="btn btn-success btn-block text-white rounded-pill btn-lg">Log in</button>
            </div> 
            <div class="mb-3 text-center">
                <a class="text-success" href="{{ route('signup') }}">
                    New to Crowdfund?
                </a> 
            </div>    
        </form>
    </div>    
</section>    
@endsection