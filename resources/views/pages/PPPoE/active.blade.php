@extends('layouts.main')

@section('title')
All Active Users
@endsection

@section('content')
<div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="row">
            <div class="col-md-12">
              <div class="card-body">
                <h3 class="card-title">All Active Users</h3>
                    <div>
                    @if (session('msg'))
                        <label class="badge badge-success"> {{ session('msg') }}</lable>
                    @endif
                    <div class="form-group col-md-2">
                        <form action="{{ route('pppoe.active')}}" class="form-control-sm" method="get">
                            @csrf
                            <select class="form-control form-control-sm" name="server" onchange="this.form.submit()">
                                @foreach ($servers as $server)
                                    <option value="{{ $server->id}}">{{ $server->shortname}}</option>
                                @endforeach
                            </select>
                        </form>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="row">
              <div class="col-md-12">
                <div class="card-body">
                  <h3 class="card-title">USers</h3>
                      <div>
                      <div class="form-group col-md-2">
                          <table>
                                <tr><th>SrNo</th><th>Name</th><th>Mac ID</th><th>IP</th><th>Uptime</th></tr>



@php
    echo $activeusers;
@endphp

                                {{-- @foreach ($activeusers as $no => $data)
                                        <tr>
                                            <td>{{ $no+1 }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->caller-id }}</td>
                                            <td>{{ $data->address }}</td>
                                            <td>{{ $data->uptime }}</td>
                                        </tr>
                                    @endforeach --}}
                          </table>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

  </div>

@endsection
