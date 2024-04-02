@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <div class="row">
      <div class="col-6 grid-margin stretch-card">
        <div class="card">
          <div class="row">
            <div class="col-md-12">
              <div class="card-body">
                <h4 class="card-title">Server Details</h4>
                <table class=".table-striped">
                    {{-- @foreach ($servers as $server) --}}
                        <tr><th>Name</th><td>{{ $servers->name }} </td></tr>
                        <tr><th>Short Name</th><td>{{ $servers->shortname }}</td></tr>
                        <tr><th>Main IP</th><td>{{ $servers->mip }}</td></tr>
                        <tr><th>Secondary IP</th><td>{{ $servers->ip2 }}</td></tr>
                        <tr><th>Enabled</th><td>@if ($servers->enable) Yes  @else No @endif </td></tr>
                    </tr>
                    {{-- @endforeach --}}
                </table>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a href="">Back</a>
  </div>

@endsection
