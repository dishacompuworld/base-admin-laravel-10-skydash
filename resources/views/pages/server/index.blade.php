@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="row">
            <div class="col-md-12">
              <div class="card-body">
                <h4 class="card-title">Servers</h4>
                <table class="table">
                    <tr><th>Name</th><th>Short Name</th><th>IP</th><th>Seconary IP</th><th>View</th><th>Edit</th></tr>
                    @foreach ($servers as $server)
                    <tr>
                        <td>{{ $server -> name }}</td>
                        <td>{{ $server -> shortname }}</td>
                        <td>{{ $server -> mip }}</td>
                        <td>{{ $server -> ip2 }}</td>
                        <td><button type="button" class="btn btn-outline-primary btn-icon-text btn-sm">
                            <i class="ti-file btn-icon-prepend"></i>
                            Show
                          </button></td>
                        <td><button type="button" class="btn btn-outline-primary btn-icon-text btn-sm">
                            <i class="ti-file btn-icon-prepend"></i>
                            Edit
                          </button></td>
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
