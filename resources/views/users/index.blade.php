@section('title')
	{{ Auth::user()->name }} | Crowdfund')
@endsection	 


@extends('layouts.app')
@section('content')
	<div class="navbar navbar-inverse bg-dark mt-n3 navbar-expand-md">
		<div class="container">
			<ul class="navbar-nav">
				<li class="nav-item nav-link text-secondary">
					<span class="me-2">
						<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-eye fs-4" viewBox="0 0 16 16">
  							<path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
  							<path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
						</svg>
					</span>View profile
				</li>
				<li class="nav-item ms-4"><a href="#" class="nav-link text-white">
					<span class="me-2">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  							<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  							<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
						</svg>
					</span>Edit profile and Settings</a>
				</li>
			</ul>
		</div>
	</div>

	<main class="container my-4">
		<section class="row mb-4">
			<div class="col-12">
				<h1 class="pt-4 fw-bolder">{{ $user->name }}</h1>
			</div>
		</section>
		<section class="row mb-5">
			<div class="col-12">
				<ul class="nav nav-tabs">
					<li class="nav-item">
					    <a class="nav-link active" href="{{ route('profile', ['user' => Auth::user()->id]) }}">Profile</a>
					</li>
				    <li class="nav-item">
				    	<a class="nav-link" href="{{ route('user-projects', ['user' => Auth::user()->id]) }}">Projects</a>
				    </li>
				    <li class="nav-item">
				    	<a class="nav-link" href="{{ route('user-contributions', ['user' => Auth::user()->id]) }}">Contributions</a>
				    </li>
				</ul>
			</div>
			<div class="row d-flex py-4 justify-content-between">
				<div class="col-md-9">
					<div class="d-inline-block w-50">
						<img src="{{ asset('images/default.png') }}" class="img-fluid">
					</div>
				</div>					
				<div class="col-md-3">
					<div class="d-flex align-items-center mb-3">
						<img src="{{ asset('images/default.png') }}" alt="photo" class="rounded-circle" style="width:60px;height:60px;">
						<h3 class="text-muted ms-3 fw-bolder">About me</h3>
					</div>
					<div class="d-flex flex-column">
						<div><span class="fw-bolder fs-4 me-2">0</span><span class="lead">Campaigns</span></div>
						<div><span class="fw-bolder fs-4 me-2">0</span><span class="lead">Comments</span></div>
						<div><span class="fw-bolder fs-4 me-2">0</span><span class="lead">Contributions</span></div>
					</div>
				</div>
			</div>
		</section>
	</main>	
@endsection

