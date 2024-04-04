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
                      <div class="form-group">
                        <label>Select Server</label>
                          <form action="{{ route('pppoe.active')}}" class="form-control-sm" method="get">
                              @csrf
                              <select class="js-example-basic-single w-50" name="server" onchange="this.form.submit()">
                                  @if (!$iid)
                                    <option value="" selected></option>
                                    @else
                                    <option value=""></option>
                                  @endif
                                  @foreach ($servers as $server)
                                    @if ($server->id==$iid)
                                      <option value="{{ $server->id}}" selected>{{ $server->shortname}}</option>
                                    @else
                                      <option value="{{ $server->id}}">{{ $server->shortname}}</option>
                                    @endif
                                  @endforeach
                              </select>
                          </form>
                      </div>
                    </div>
                </div>
                  @if ($activeu)

                  @php
                    $totalusers =count($activeu);
                  @endphp
                    <div class="form-group col-md-12">
                      <h4 class="card-title">Online Users {{ $totalusers }}</h4>
                      <table class="table table-hover">
                            <tr><th>SrNo</th><th>Name</th><th>Mac ID</th><th>IP</th><th>Uptime</th><th>Delete</th></tr>
                            @foreach (array_reverse($activeu) as $no => $activeuser)
                                    <tr>
                                        <td>{{ $no+1 }}</td>
                                        <td>{{ $activeuser['name'] }}</td>
                                        <td>{{ $activeuser['caller-id'] }}</td>
                                        <td>{{ $activeuser['address'] }}</td>
                                        <td>{{ $activeuser['uptime'] }}</td>
                                        <td>
                                          <form action="{{ route('pppoe.delete', $activeuser['.id'])}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="server" value="{{ $iid }}">
                                            <button type="submit" name="" id="" class="btn btn-danger btn-sm">Delete</button>
                                          </form>
                                          {{-- <a href="{{ route('pppoe.delete',$activeuser['.id'])}}" class="btn btn-danger btn-sm">Delete</a> --}}
                                        </td>
                                    </tr>
                                @endforeach
                      </table>
                  </div>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
