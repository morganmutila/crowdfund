@if(session()->has('status_success'))
    <section class="row">
        <div class="col">   
            <div class="alert alert-success">{{ session('status_success') }}</div>
        </div>
    </section>   
@elseif(session()->has('status_fail'))    
    <section class="row">
        <div class="col">   
            <div class="alert alert-danger">{{ session('status_fail') }}</div>
        </div>
    </section> 
@elseif(session()->has('status_warning'))    
<section class="row">
    <div class="col">   
        <div class="alert alert-warning">{{ session('status_warning') }}</div>
    </div>
</section>     
@endif
