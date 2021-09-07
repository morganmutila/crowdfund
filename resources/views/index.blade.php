<x-layout title="Home | Crowdfund">

	@include('layouts.home-cover')

	<!--Featured projects-->
	<div class="container-lg mb-5" id="featured-content">
		<section class="d-flex flex-wrap justify-content-between align-items-center pt-1 pb-4 mb-4">
			<h2 class="mb-0 pt-3 me-3">Featured Projects</h2>
			<div class="ms-auto">
				<a class="btn btn-success text-white mt-3" href="{{ route('discover') }}">See all</a>
			</div>	
		</section>
		<section class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 gb-4">
			@forelse($projects as $project)
				<div class="col mb-md-4"> 
					<div class="card h-100 project-showcase">
						<div class="project-thumb" style="background-image: url({{ $project->projectImage() }}); background-color: #444242;">							
						</div>
						<div class="card-body d-flex flex-column justify-content-between">						
							<div class="mb-2">
								<a href="{{ route('projects.show', ['project' => $project->id]) }}" class="d-inline-block stretched-link text-dark text-decoration-none card-title text-wrap mb-3">{{ $project->title }}</a>

								<div class="small text-muted d-block mb-3" style="max-height: 2.5rem; overflow: hidden;">{{ $project->projectDescription() }}</div>
							</div>
							<div>
								<div class="my-2 text-uppercase text-muted fw-bold" style="font-size:.7rem;">{{ $project->category->name }}</div>
								<div class="d-flex justify-content-start align-items-center mb-2">
									<img src="{{ asset('images/profile.png') }}" alt="" class="rounded-circle me-2" style="width:34px;height:34px;">				
									<div class="vstack justify-content-center">
										<h6 class="m-0">{{ $project->user->name }}</h6>
										<div class="m-0 text-muted small">{{ $project->location }}</div>
									</div>
								</div>
								<div class="progress mb-2" style="height: 8px;background-color: #d4d4d4;">
								  <div class="progress-bar" role="progressbar" style="width:{{$project->progress() }}; background-color: #36ac9c; border-radius: 8px;"></div>
								</div>
								<div class="d-flex justify-content-between">							
									<div class="vstack">
										<div class="fw-bold">{{ $project->progress() }}</div>
										<div class="small">funded</div>
									</div>							
									<div class="vstack text-center">
										<div class="fw-bolder">{{ $project->projectBudget() }}</div>
										<div class="small">target</div>	
									</div>
									<div class="vstack">
										<div class="fw-bold text-end">
											{{ $project->duration() }}
										</div>
										<div class="small text-end">days left</div>
									</div>
								</div>
							</div>	
						</div>
					</div>
				</div>
			@empty
				<p class="lead">There are no projects yet</p>
			@endforelse
		</section>
	</div>

	<!--Category-->
	<section class="bg-light mb-5">
		<div class="container-lg py-4">
			<section class="row">
				<div class="col-12">
					<h2 class="mb-3">Browse by Category</h2>
					<p class="lead">Discover projects just for you and get great recommendations when you select your interests.</p>
				</div>
			</section>	

			<section class="row">
				<ul class="home-category d-flex justify-content-between align-items-center flex-wrap">
					@foreach($categories as $category)
						<li><a href="{{ route('discover', ['category' => $category->id]) }}" class="text-capitalize">{{ $category->name }}</a></li>
					@endforeach
				</ul>
			</section>
		</div>
	</section>

	<!--FAQs-->
	<div class="container-lg mb-5">	
		<section class="row">
			<div class="col">
				<h2 class="pb-3">Frequently Asked Questions</h2>
			</div>
		</section>	
		<section class="row">
			<div class="col">
				<div class="accordion" id="fAqs">
					@foreach($faqs as $faq)
					  	<div class="accordion-item bg-transparent">
					    	<h2 class="accordion-header bg-transparent" id="heading-{{ $faq->id }}">
							    <button class="border-0 btn py-3 w-100 text-start bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#question-{{ $faq->id }}">
							        {{ $faq->question }}
							    </button>
					    	</h2>
						    <div id="question-{{ $faq->id }}" class="accordion-collapse collapse" data-bs-parent="#fAqs">
						      	<div class="accordion-body  bg-transparent">
						      		{{ $faq->answer }}
							    </div>
						    </div>
					    </div>
					@endforeach    				 
				</div>
			</div>
			<div class="col">
				<div class="accordion" id="fAqs">
					@foreach($faqs as $faq)

					  	<div class="accordion-item bg-transparent">
					    	<h2 class="accordion-header bg-transparent" id="heading-{{ $faq->id }}">
							    <button class="border-0 btn py-3 w-100 text-start bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#question-{{ $faq->id }}">
							        {{ $faq->question }}
							    </button>
					    	</h2>
						    <div id="question-{{ $faq->id }}" class="accordion-collapse collapse" data-bs-parent="#fAqs">
						      	<div class="accordion-body  bg-transparent">
						      		{{ $faq->answer }}
							    </div>
						    </div>
					    </div>
					@endforeach
				</div>
			</div>
		</section>
	</div>	

	<!--Blog-->
	<section class="bg-primary py-5">
		<div class="container-lg mb-5">	
			<section class="row">
				<div class="col">
					<h2 class="pb-3 text-white">From Crowdfund Blog</h2>
				</div>
				<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
					<div class="col mb-md-0 mb-5">
						<article class="card border-0">
							<img src="{{ asset('images/cover4.jpg') }}" alt="Blog image" class="card-img-top mb-3">
							<div class="card-body">
								<h3 class="card-title lead">Some title goes here</h3>
								<div class="text-muted mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi voluptates inventore</div>
								<a href="card-link" class="text-uppercase fs-6 text-dark text-decoration-none fw-bold">Read More &raquo;</a>
							</div>
						</article>
					</div>
					<div class="col mb-md-0 mb-5">
						<article class="card border-0">
							<img src="{{ asset('images/cover3.jpg') }}" alt="Blog image" class="card-img-top mb-3">
							<div class="card-body">
								<h3 class="card-title lead">Some title goes here</h3>
								<div class="text-muted mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi voluptates inventore</div>
								<a href="card-link" class="text-uppercase fs-6 text-dark text-decoration-none fw-bold">Read More &raquo;</a>
							</div>
						</article>
					</div>
					<div class="col mb-md-0 mb-5">
						<article class="card border-0">
							<img src="{{ asset('images/cover2.jpg') }}" alt="Blog image" class="card-img-top mb-3">
							<div class="card-body">
								<h3 class="card-title lead">Some title goes here</h3>
								<div class="text-muted mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi voluptates inventore</div>
								<a href="card-link" class="text-uppercase fs-6 text-dark text-decoration-none fw-bold">Read More &raquo;</a>
							</div>
						</article>
					</div>
				</div>
			</section>
		</div>
	</section>
</x-layout>