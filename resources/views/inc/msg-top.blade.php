@if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
@elseif(Session::has('error'))
    <div class="alert alert-danger">
        {{Session::get('error')}}
    </div>
@endif

@if(Session::has('msg'))
    <div class="alert alert-info">
        {{Session::get('msg')}}
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    </div>
@endif
