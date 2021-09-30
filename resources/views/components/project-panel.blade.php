@props(['project' => $project])

<div class="col mb-md-4 mb-3"> 
	<div class="card h-100 project-showcase">
		<div class="project-thumb" style="background-image: url({{ $project->project_image }}); background-color: #444242;">							
		</div>
		<div class="card-body d-flex flex-column justify-content-between">						
			<div class="mb-2">
				<a href="{{ route('projects.show', $project) }}" class="d-inline-block text-dark text-decoration-none card-title text-wrap mb-3 stretched-link">{{ $project->title }}</a>

				<div class="small text-muted d-block mb-2" style="max-height: 2.5rem; overflow: hidden;">{{ $project->projectDescription() }}</div>
			</div>
			<div>
				<div class="my-2 text-uppercase text-muted" style="font-size:.7rem;">{{ $project->category->name }}</div>
				<div class="d-flex justify-content-start align-items-center mb-2">
					<img src="https://i.pravatar.cc/34?u={{ $project->user->id }}" alt="" class="rounded-circle me-2" style="width:34px;height:34px;">				
					<div class="vstack justify-content-center">
						<h6 class="m-0">{{ $project->user->name }}</h6>
						<div class="m-0 text-muted small">{{ $project->location }}</div>
					</div>
				</div>
				<div class="progress mb-2" style="height: 8px;background-color: #d4d4d4;">
				  <div class="progress-bar" role="progressbar" style="width:{{$project->progress }}; background-color: #36ac9c; border-radius: 8px;"></div>
				</div>
				<div class="d-flex justify-content-between">							
					<div class="vstack">
						<div class="fw-bold">{{ $project->progress }}</div>
						<div class="small">funded</div>
					</div>							
					<div class="vstack text-center">
						<div class="fw-bolder">{{ $project->budget }}</div>
						<div class="small">target</div>	
					</div>
					<div class="vstack">
						<div class="fw-bold text-end">
							{{ $project->duration }}
						</div>
						<div class="small text-end">days left</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>