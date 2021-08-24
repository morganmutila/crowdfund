@if(session()->has('status'))
    <section class="row">
        <div class="col">   
            <div class="alert alert-warning">{{ session('status') }}</div>
        </div>
    </section>   
@endif