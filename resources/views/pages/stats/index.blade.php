@php
    if($data){
        $fmemory = floatval($data['freememory'])/1024/1024;
        $tmemory = floatval($data['totalmemory'])/1024/1024;

        $fhdd = floatval($data['freehdd'])/1024/1024;
        $thdd = floatval($data['totalhdd'])/1024/1024;
    }
@endphp

@extends('layouts.main')

@section('title')
All Active Users
@endsection

@section('content')
<div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="col-md-12">
              <div class="card-body">
                <h3 class="card-title">Server Statistics</h3>

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
                @if ($data)
                <div class="form-group col-md-12">
                    <div class=" table table-responsive">
                        <table class="table-hover">
                            <tr><th>Server Identity :</th><td>{{ $data['identity'] }}</td></tr>
                            <tr><th>Server Model :</th><td>{{ $data['model'] }}</td></tr>
                            <tr><th>Server Factory version :</th><td>{{ $data['factorysoftware'] }}</td></tr>
                            <tr><th>Server Current version :</th><td>{{ $data['version'] }} ({{ $data['buildtime'] }})</td></tr>
                            <tr><th>Server uptime :</th><td>{{ $data['uptime'] }}</td></tr>
                            <tr><th>Server memory free/total :</th><td>{{ $fmemory }} / {{ $tmemory }} MB</td></tr>
                            <tr><th>Server hdd free/total :</th><td>{{ $fhdd }} / {{ $thdd }} MB</td></tr>
                            <tr><th>Server Active users :</th><td><a href="{{ route('pppoe.active', ['server'=>$iid])}}">{{ $data['active'] }}</a></td></tr>
                        </table>
                    </div>
                </div>
                @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
