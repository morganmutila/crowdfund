<x-layout title='Forgot Password | Crowfund'>
    
    <nav class="navbar navbar-expand navbar-light">
        <div class="container-fluid">
            <a href="/" class="navbar-brand ps-4"><img src="{{ asset('images/logo.png') }}" class="img-fluid w-75" alt="CF"></a>
        </div>
    </nav>
    <main class="container my-4">
        <section class="row justify-content-center align-items-center flex-column"> 
            <div class="col-md-6 col-sm-8"> 
                <div class="card border-0 shadow p-4">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <h4 class="my-4 fw-bolder">Change Password</h4>
                        <div class="ms-auto"><a class="text-success" href="{{ route('login') }}">Back to login</a>
                        </div>
                    </div> 
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-3" :errors="$errors" />

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <!-- Email Address -->
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control bg-light form-control-lg @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}"  placeholder="Email" style="height: calc(3.2rem + 2px);line-height: 1;">
                            <label for="email"  class="form-label">Email</label>
                            @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                         </div>

                        <!-- Password -->
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control bg-light form-control-lg @error('password') is-invalid @enderror" id="password" name="password"  placeholder="Password" style="height: calc(3.2rem + 2px);line-height: 1;">
                            <label for="password"  class="form-label">Password</label>
                            @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control bg-light form-control-lg @error('password') is-invalid @enderror" id="password_confirmation" name="password_confirmation"  placeholder="Confirm Password" style="height: calc(3.2rem + 2px);line-height: 1;">
                            <label for="password_confirmation"  class="form-label">Password Confirmation</label>
                            @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-4">
                            <button type="submit" class="w-100 btn btn-success btn-block text-white rounded btn-lg">Change Password</button>
                        </div>
                    </form>
                </div>    
            </div>
        </section>   
    </main> 
</x-layout>

