<x-layout title="Discover | Crowdfund">
	<section class="bg-light">
		<div class="container py-2">
			<div class="dropdown">
				Filter:
			  	<button class="btn btn-light dropdown-toggle fw-bold" type="button" data-bs-toggle="dropdown">
			   		Populality<span class="ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/></svg></span>
			  	</button>
			    <ul class="dropdown-menu" >
			    	<li><a class="dropdown-item" href="#">Action</a></li>
			    	<li><a class="dropdown-item" href="#">Another action</a></li>
			    	<li><a class="dropdown-item" href="#">Something else here</a></li>
			    </ul>
			</div>   
		</div>
	</section>

	<section class="border-bottom my-3">
		<div class="container-lg">
			<ul class="home-category p-0 d-flex justify-content-start align-items-center flex-wrap">
				<li {{ request()->is('discover') ? 'class=active' : '' }} ><a href="{{ route('discover') }}" class="text-capitalize" style="min-width: 180px;">All categories</a></li>
				@foreach($categories as $category)
					{{-- @dd(request()->is("discover/music" )) --}}
					<li  {{ request()->is('discover/'. $category->slug.'') ? 'class=active' : '' }}>
						<a href="{{ route('discover', $category) }}" class="text-capitalize" style="min-width: 180px;">{{ $category->name }}</a>
					</li>
				@endforeach
			</ul>
		</div>	
	</section>	
		<div class="container-lg mb-5" id="featured-content">
			<section class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 gb-4">
				@forelse($projects as $project)
					<x-project-panel :project="$project"/>
				@empty
					<p class="lead my-4">There are no projects yet</p>
				@endforelse
			</section>
		</div>
		
	</div>

</x-layout>		
