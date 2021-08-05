@extends('layouts.app')
@section('content')

<section class="row g-0 justify-content-center flex-column align-items-center"> 

        @if(session()->has('status'))
            <div class="alert alert-warning col-lg-6">{{ session()->get('status') }}</div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger col-lg-6">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card col-lg-6">
        <div class="card-header">
            <h5 class="card-title">Forgot Password</h5>
        </div>
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
        </div>    
    </div>
</section>          
@endsection
