@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a client</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('clients.store') }}">
          @csrf
          <div class="form-group">    
              <label for="name">First Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>                   
          <button type="submit" class="btn btn-primary outline">Add Client</button>
      </form>
  </div>
</div>
</div>
</div>
@endsection
