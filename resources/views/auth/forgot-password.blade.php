@section('title', 'Forgot Password | Crowfund')
@extends('layouts.app')

@section('content')
    @if(session()->has('status'))
        <div class="alert alert-info alert-dismissible fade show mt-n3">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-9">
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                            </symbol>
                        </svg>
                        <svg class="bi flex-shrink-0 me-2" width="20" height="20" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                        <span class="text-dark fs-5 align-middle">{{ session()->get('status') }}
                        <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>    
            </div>
        </div>
    @endif  
    <main class="container my-4">
        <section class="row justify-content-center align-items-center flex-column"> 
            <div class="col-lg-5"> 
                <div class="card">
                <h5 class="card-header fw-bold">Forgot Password</h5>
                <div class="card-body">
                    <p class="card-text">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control bg-light form-control-lg @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                            @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="mb-4 d-grid">
                            <button type="submit" class="btn btn-success btn-block text-white rounded-pill btn-lg">Reset Password</button>
                        </div> 
                    </form> 
                    <p class="card-text">Having problems? Please try again later, or <a href="#" class="card-link">contact support.</a></p>
                </div>    
            </div>
        </section>   
    </main>       
@endsection
