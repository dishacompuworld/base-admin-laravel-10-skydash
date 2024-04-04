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
                <h3 class="card-title">Server Statics</h3>
                    <div>
                    {{-- @if ($msg) --}}
                        {{-- <label class="badge badge-success"> {{ $msg }}</lable> --}}
                    {{-- @endif --}}
                    <div class="form-group col-md-2">
                      <div class="form-group">
                        <label>Select Server</label>
                          <form action="{{ route('stats.index')}}" class="form-control-sm" method="get">
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

                @if ($data)
                    <div class="form-group col-md-12">
                        <div>
                            <h4 class="card-title">Server Identity : {{ $data['identity'] }}</h4>
                        </div>
                        <div>
                            <h4 class="card-title">Server Model : {{ $data['model'] }}</h4>
                        </div>
                        <div>
                            <h4 class="card-title">Server version : {{ $data['version'] }}</h4>
                        </div>
                        <div>
                            <h4 class="card-title">Server uptime : {{ $data['uptime'] }}</h4>
                        </div>
                        <div>
                            <h4 class="card-title">Server freememory : {{ $data['freememory'] }}</h4>
                        </div>
                        <div>
                            <h4 class="card-title">Server freehdd : {{ $data['freehdd'] }}</h4>
                        </div>
                        <div>
                            <h4 class="card-title">Server Active users : {{ $data['active'] }}</h4>
                        </div>
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
