@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">{{ $client->name }}</h1>
      </div>
    </div>
  </div>
@endsection
