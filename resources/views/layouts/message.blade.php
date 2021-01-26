@if(count($errors) >= 1 )
<div class="col-12 alert alert-danger" role="alert">
  @foreach($errors->all() AS $error)
    
    <ul>
      <li>{{$error}}</li>
    </ul>
  @endforeach
  </div>
@endif


@if(session('success'))

<div class="col-12 alert alert-success" role="alert">
    {{ session('success')}}
</div>

@endif

@if(session('error'))

<div class="col-12 alert alert-danger" role="alert">
    {{ session('error')}}
</div>

@endif