@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 margin-tb">
        <div class="pull-left">
          <h2>Laravel 8 CRUD </h2>
        </div>
        <div class="pull-right">
          <a class="btn btn-success mb-4" href="{{ route('clients.create') }}" title="Create a project"> New
            client
          </a>
        </div>
      </div>
    </div>

    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Date Created</th>
        <th>Action</th>
      </tr>
      @foreach ($clients as $client)
        <tr>
          <td>{{ $client->id }}</td>
          <td>{{ $client->name }}</td>
          <td>{{ date_format($client->created_at, 'jS M Y') }}</td>
          <td class="d-flex align-items-between">
            <a href="{{ route('clients.show', $client->id) }}" title="show" class="mx-1 btn btn-success">
              Show
            </a>
            <a href="{{ route('clients.edit', $client->id) }}" class="mx-1 btn btn-primary">Edit</a>
            <form action="{{ route('clients.destroy', $client->id) }}" method="POST">
              @csrf
              @method('DELETE')

              <button type="submit" title="delete" class="mx-1 btn btn-danger" data-confirm="Are you sure?">
                Delete
              </button>
            </form>
          </td>
        </tr>
      @endforeach
    </table>
    <div class="row">
      <div class="col-xs-12">
        {{ $clients->links() }}
      </div>
    </div>
  </div>


@endsection
