<x-layout title='Create Project | Crowdfund'>

	<form method="POST" action="{{ route('projects.store') }}" enctype="multipart/form-data">
		<section class="bg-light mb-4 d-none d-md-block">
			<div class="container py-4">	
				<section class="row">
					<div class="col-12 d-flex justify-content-between align-items-center">
						<ul class="breadcrumb m-0 d-flex align-items-center">
							<li class="breadcrumb-item">Project</li>
							<li class="breadcrumb-item active">Create</li>
						</ul>
						<div class="hstack float-end">
							<a class="btn btn-outline-secondary py-2 px-4 text-capitalize" href="{{ url('/') }}">Back</a>
							<button class="btn btn-success fw-bold py-2 px-4 text-white ms-2 text-capitalize" type="submit">Save Project</button>
						</div>
					</div>
				</section>		
			</div>	
		</section>

		<div class="container mb-4">
			<x-status/>
			<section class="row pb-3 mt-md-0 mt-4">
				<h3 class="fw-bolder">Create a Project</h3>	
			</section>

			<section class="row">
				<div class="col-md-6">
									
						@csrf	

						<div class="mb-4">
						    <label for="projectTitle" class="form-label fw-bold fs-6">Project Title <span class="text-danger">*</span></label>
						    <p class="small text-muted">A unique title that describes your project.</p>
						    <input type="text" class="form-control" id="projectTitle" name="title" value="{{ old('title', 'My Project title') }}">
							@error('title') <div class="text-danger">{{ $message }} </div> @enderror
						</div>

						<div class="mb-4">
						    <label for="location" class="form-label fw-bold fs-6">Location <span class="text-danger">*</span></label>
						  	<p class="small text-muted">Where the project is located.</p>
						    <input type="text" class="form-control" id="location" name="location" value="{{ old('location') }}">
							@error('location') <div class="text-danger">{{ $message }} </div> @enderror
						</div>

						<div class="mb-4">
						    <label for="projectDescription" class="form-label fw-bold fs-6">Project Description <span class="text-danger">*</span></label>
						    <p class="small text-muted">A description about your project, let funders know more about your project.</p>
						    <textarea class="form-control" placeholder="Your project description here" id="projectDescription" rows="3" name="description">{{ old('description') }}</textarea>
							@error('description') <div class="text-danger">{{ $message }} </div> @enderror
						</div>

						<div class="mb-4">
						  	<div class="form-label fw-bold fs-6">Project Image <span class="text-danger">*</span></div>
						  	<p class="small text-muted">Upload a square image that represents your project. 640 x 640 recommended resolution, 220 x 220 minimum resolution.</p>
						  	
						  	<input class="custome-file-input" type="file" id="ProjectImage" name="project_image">
						  	<label for="ProjectImage" class="text-center p-4 w-100 rounded-lg d-inline-block">
						  		<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
								  <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
								  <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z"/>
								</svg>
								<span class="my-2 text-lead d-block fw-bolder">Click to add a project picture</span>
								<span class="text-muted d-block">JPG, PNG, SVG - 5MB file limit</span>
							</label>
						  	@error('project_image') <div class="text-danger">{{ $message }} </div> @enderror
						</div>

						<div class="mb-4">
						    <label for="projectCategory" class="form-label fw-bold fs-6">Category <span class="text-danger">*</span></label>
						    <p class="small text-muted">To help funders find your campaign, select a category that best represents your project.</p>
							<select class="form-select" id="projectCategory" name="category">
								<option>Choose a category</option>
								@foreach($categories as $key =>$value)								
									<option value="{{ $value }}" @if(request()->old('category') == $value) selected @endif>
										{{ $key }}
									</option>
								@endforeach	
							</select>
							@error('category') <div class="text-danger">{{ $message }} </div> @enderror
						</div>

						<div class="mb-5 justify-content-between align-items-stretch">
							<div class="col-auto flex-md-grow-1 h-100">
							    <label for="ProjectDuration" class="form-label fw-bold fs-6">Duration <span class="text-danger">*</span></label>
							    <p class="small text-muted">Describe how long the project will last.</p>
							    <div class="input-group w-100">
							    	<input type="number" class="form-control text-end" id="ProjectDuration" name="duration" value="{{ old('duration', 7) }}">
							    	<div class="input-group-text fw-bolder bg-light">days</div>
							    </div>	
							    @error('duration') <div class="text-danger">{{ $message }} </div> @enderror
							</div>

		    				<div class="col-auto h-100">
							    <label for="ProjectBudget" class="form-label fw-bold fs-6">Budget <span class="text-danger">*</span></label>
							    <p class="small text-muted">How much you need for the project.</p>
							    <div class="input-group w-100">
							    	<div class="input-group-text fw-bolder bg-light">K</div>
							    	<input type="number" class="form-control w-25" id="ProjectBudget" name="budget"  value="{{ old('budget', 0000) }}">
								</div>	
								@error('budget') <div class="text-danger">{{ $message }} </div> @enderror
							</div>
						</div>	

						<div class="hstack float-end">
							<a class="btn btn-outline-secondary py-3 px-4 text-capitalize" href="{{ url('/') }}">Back</a>
							<button class="btn btn-success fw-bold py-3 px-4 text-white ms-2 text-capitalize" type="submit">Save Project</button>
						</div>	

				</div>	
			</section>
		</div>	
	</form>	

</x-layout>
