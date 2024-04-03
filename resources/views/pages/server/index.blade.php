@extends('layouts.main')

@section('title')
  All Servers
@endsection

@section('content')
<div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="row">
            <div class="col-md-12">
              <div class="card-body">
                <h3 class="card-title">Servers</h3>
                    <div>
                    @if (session('msg'))
                    <label class="badge badge-success"> {{ session('msg') }}</lable>
                    @endif
                </div>
                <table class="table">
                    <tr><th>ID</th><th>Name</th><th>Short Name</th><th>IP</th><th>Seconary IP</th><th>View</th><th>Edit</th></tr>
                    @foreach ($servers as $server)
                    <tr>
                        <td>{{ $server -> id }}</td>
                        <td>{{ $server -> name }}</td>
                        <td>{{ $server -> shortname }}</td>
                        <td>{{ $server -> mip }}</td>
                        <td>{{ $server -> ip2 }}</td>
                        <td><a href="{{ route('server.show', $server -> id) }}" class="btn btn-outline-primary btn-icon-text btn-sm">Show</a></td>
                        <td><a href="{{ route('server.edit', $server -> id) }}" class="btn btn-outline-primary btn-icon-text btn-sm">Edit</a></td>
                    </tr>
                    @endforeach
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

@endsection