<!-- Success message -->
@if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
@endif

<!-- Error message -->
@if(Session::has('errors'))
    <div class="alert alert-danger">
        {{Session::get('errors')}}
    </div>
@endif
