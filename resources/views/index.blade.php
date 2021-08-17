@section('title', 'Home | Crowdfund')

@extends('layouts.app')
@section('content')
	@include('layouts.home-carousel')
	<main class="container my-4">
		<section class="row row-cols-1 row-cols-md-4 g-4">
			<div class="col-12">
				<h2 class="border-bottom pb-3">Projects Available</h2>
			</div>
			<article class="col"> 
				<div class="card">
					<img src="{{ asset('images/cover4.jpg') }}" class="card-img-top img-fluid">
					<div class="card-body">
						<div class="d-flex justify-content-between align-items-center">
							<div class="text-uppercase text-muted fw-bold fs-6" style="font-size:0.7rem !important;">Funding</div>
							<div>
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill invisible" viewBox="0 0 16 16">
	  								<path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
								  <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
								</svg>
							</div>
						</div>	
						<hr>
						<a href="#" class="h5 stretched-link text-dark text-decoration-none card-title">My first project that was initiated to be very long</a>
						<div class="card-text my-3 text-muted">Lorem ipsum dolor, consectetur adipisicing elit. Repellendus asperiores molestiae iusto ex</div>
						<div class="my-2 text-uppercase fw-bold fs-6" style="font-size:0.75rem !important;">Category</div>
						<div class="d-flex justify-content-between">
							<div><span class="fw-bold">K15,000</span><span class="ms-2 small text-muted">ZMK raised</span></div>
							<div class="fw-bold small text-muted">302%</div>
						</div>
						<div class="progress" style="height: .45rem;background-color: #d4d4d4;">
						  <div class="progress-bar" role="progressbar" style="width:25%; background-color: #38c172;"></div>
						</div>
						<div class="text-left text-muted mt-2">
							<small class="small align-top">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
		  							<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
								</svg>
							</small>
							<span class="ms-1">
								51 days left
							</span>
						</div>
					</div>
				</div>
			</article>
			<article class="col"> 
				<div class="card">
					<img src="{{ asset('images/cover4.jpg') }}" class="card-img-top img-fluid">
					<div class="card-body">
						<div class="d-flex justify-content-between align-items-center">
							<div class="text-uppercase text-muted fw-bold fs-6" style="font-size:0.7rem !important;">Funding</div>
							<div>
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill invisible" viewBox="0 0 16 16">
	  								<path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
								  <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
								</svg>
							</div>
						</div>	
						<hr>
						<a href="#" class="h5 stretched-link text-dark text-decoration-none card-title">My first project that was initiated to be very long</a>
						<div class="card-text my-3 text-muted">Lorem ipsum dolor, consectetur adipisicing elit. Repellendus asperiores molestiae iusto ex</div>
						<div class="my-2 text-uppercase fw-bold fs-6" style="font-size:0.75rem !important;">Category</div>
						<div class="d-flex justify-content-between">
							<div><span class="fw-bold">K15,000</span><span class="ms-2 small text-muted">ZMK raised</span></div>
							<div class="fw-bold small text-muted">302%</div>
						</div>
						<div class="progress" style="height: .45rem;background-color: #d4d4d4;">
						  <div class="progress-bar" role="progressbar" style="width:25%; background-color: #38c172;"></div>
						</div>
						<div class="text-left text-muted mt-2">
							<small class="small align-top">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
		  							<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
								</svg>
							</small>
							<span class="ms-1">
								51 days left
							</span>
						</div>
					</div>
				</div>
			</article>
			<article class="col"> 
				<div class="card">
					<img src="{{ asset('images/cover4.jpg') }}" class="card-img-top img-fluid">
					<div class="card-body">
						<div class="d-flex justify-content-between align-items-center">
							<div class="text-uppercase text-muted fw-bold fs-6" style="font-size:0.7rem !important;">Funding</div>
							<div>
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill invisible" viewBox="0 0 16 16">
	  								<path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
								  <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
								</svg>
							</div>
						</div>	
						<hr>
						<a href="#" class="h5 stretched-link text-dark text-decoration-none card-title">My first project that was initiated to be very long</a>
						<div class="card-text my-3 text-muted">Lorem ipsum dolor, consectetur adipisicing elit. Repellendus asperiores molestiae iusto ex</div>
						<div class="my-2 text-uppercase fw-bold fs-6" style="font-size:0.75rem !important;">Category</div>
						<div class="d-flex justify-content-between">
							<div><span class="fw-bold">K15,000</span><span class="ms-2 small text-muted">ZMK raised</span></div>
							<div class="fw-bold small text-muted">302%</div>
						</div>
						<div class="progress" style="height: .45rem;background-color: #d4d4d4;">
						  <div class="progress-bar" role="progressbar" style="width:25%; background-color: #38c172;"></div>
						</div>
						<div class="text-left text-muted mt-2">
							<small class="small align-top">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
		  							<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
								</svg>
							</small>
							<span class="ms-1">
								51 days left
							</span>
						</div>
					</div>
				</div>
			</article>
			<article class="col"> 
				<div class="card">
					<img src="{{ asset('images/cover4.jpg') }}" class="card-img-top img-fluid">
					<div class="card-body">
						<div class="d-flex justify-content-between align-items-center">
							<div class="text-uppercase text-muted fw-bold fs-6" style="font-size:0.7rem !important;">Funding</div>
							<div>
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill invisible" viewBox="0 0 16 16">
	  								<path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
								  <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
								</svg>
							</div>
						</div>	
						<hr>
						<a href="#" class="h5 stretched-link text-dark text-decoration-none card-title">My first project that was initiated to be very long</a>
						<div class="card-text my-3 text-muted">Lorem ipsum dolor, consectetur adipisicing elit. Repellendus asperiores molestiae iusto ex</div>
						<div class="my-2 text-uppercase fw-bold fs-6" style="font-size:0.75rem !important;">Category</div>
						<div class="d-flex justify-content-between">
							<div><span class="fw-bold">K15,000</span><span class="ms-2 small text-muted">ZMK raised</span></div>
							<div class="fw-bold small text-muted">302%</div>
						</div>
						<div class="progress" style="height: .45rem;background-color: #d4d4d4;">
						  <div class="progress-bar" role="progressbar" style="width:25%; background-color: #38c172;"></div>
						</div>
						<div class="text-left text-muted mt-2">
							<small class="small align-top">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
		  							<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
								</svg>
							</small>
							<span class="ms-1">
								51 days left
							</span>
						</div>
					</div>
				</div>
			</article>
		</section>
		<section class="row my-5">
			<div class="col-12">
				<h2 class="text-center mb-3">Which categories interest you?</h2>
				<p class="text-center lead">Discover projects just for you and get great recommendations when you select your interests.</p>
			</div>
			<div class="col-2 p-5 text-center"><a href="#" class="text-uppercase link-dark text-decoration-none fs-6">Category 1</a></div>
			<div class="col-2 p-5 text-center"><a href="#" class="text-uppercase link-dark text-decoration-none fs-6">Category 1</a></div>
			<div class="col-2 p-5 text-center"><a href="#" class="text-uppercase link-dark text-decoration-none fs-6">Category 1</a></div>
			<div class="col-2 p-5 text-center"><a href="#" class="text-uppercase link-dark text-decoration-none fs-6">Category 1</a></div>
			<div class="col-2 p-5 text-center"><a href="#" class="text-uppercase link-dark text-decoration-none fs-6">Category 1</a></div>
			<div class="col-2 p-5 text-center"><a href="#" class="text-uppercase link-dark text-decoration-none fs-6">Category 1</a></div>
		</section>
		<section class="row my-5">
			<div class="col-12">
				<h2 class="pb-3 text-md-center">Frequently Asked Questions</h2>
			</div>
			<div class="col-12 d-flex align-items-center">
				<div class="accordion w-100 accordion-flush" id="accordionExample">
				  <div class="accordion-item">
				    <h2 class="accordion-header" id="headingOne">
				      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				        <h4>Why is Morgan Simasiku Mutila amazing?</h4>
				      </button>
				    </h2>
				    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
				      <div class="accordion-body lead">
				        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the .accordion-body, though the transition does limit overflow.
				      </div>
				    </div>
				  </div>
				  <div class="accordion-item">
				    <h2 class="accordion-header" id="headingTwo">
				      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				        <h4>To be friends is a good thing</h4>
				      </button>
				    </h2>
				    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
				      <div class="accordion-body lead">
				        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the .accordion-body, though the transition does limit overflow.
				      </div>
				    </div>
				  </div>
				  <div class="accordion-item">
				    <h2 class="accordion-header" id="headingThree">
				      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				        <h4>Do I have to know him</h4>
				      </button>
				    </h2>
				    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
				      <div class="accordion-body lead">
				        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the accordion-body though the transition does limit overflow.
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</section>
				<section class="row my-5">
			<div class="col-12">
				<h2 class="pb-3 text-md-center">From Crowdfund Blog</h2>
			</div>
			<div class="row row-cols-1 row-cols-md-3">
				<div class="col-4">
					<article class="card border-0">
						<img src="{{ asset('images/cover4.jpg') }}" alt="Blog image" class="card-img-top mb-3">
						<div class="card-text">
							<h3 class="card-title lead">Some title goes here</h3>
							<div class="text-muted mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi voluptates inventore</div>
							<a href="card-link" class="text-uppercase fs-6 text-dark text-decoration-none fw-bold">Read More &raquo;</a>
						</div>
					</article>
				</div>
				<div class="col-4">
					<article class="card border-0">
						<img src="{{ asset('images/cover3.jpg') }}" alt="Blog image" class="card-img-top mb-3">
						<div class="card-text">
							<h3 class="card-title lead">Some title goes here</h3>
							<div class="text-muted mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi voluptates inventore</div>
							<a href="card-link" class="text-uppercase fs-6 text-dark text-decoration-none fw-bold">Read More &raquo;</a>
						</div>
					</article>
				</div>
				<div class="col-4">
					<article class="card border-0">
						<img src="{{ asset('images/cover2.jpg') }}" alt="Blog image" class="card-img-top mb-3">
						<div class="card-text">
							<h3 class="card-title lead">Some title goes here</h3>
							<div class="text-muted mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi voluptates inventore</div>
							<a href="card-link" class="text-uppercase fs-6 text-dark text-decoration-none fw-bold">Read More &raquo;</a>
						</div>
					</article>
				</div>
			</div>
		</section>
	</main>	
@endsection

