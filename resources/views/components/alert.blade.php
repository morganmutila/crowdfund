@if ($errors->any())
    <section class="row">
        <div class="col">                   
            <div class="alert alert-danger">
                {{ $slot }}                        
                <ul class="m-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>                  
        </div>
    </section>
@endif  
