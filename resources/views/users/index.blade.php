@section('title')
	{{ Auth::user()->name . '| Crowdfund' }} 
@endsection	 


@extends('layouts.app')
@section('content')
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

