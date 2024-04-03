
@extends('layouts.main')

@section('title')
  Update Servers
@endsection

@section('content')
<div class="content-wrapper">
    <div class="row">
      <div class="col-6 grid-margin stretch-card">
        <div class="card">
          <div class="row">
            <div class="col-md-12">
              <div class="card-body">
                <h4 class="card-title">Update Server Details</h4>
            <form class="forms-sample" method="post" action="{{ route('server.update', $servers->id) }}"name="update">
                @csrf
                @method('PUT')
              <div class="form-group">
                <label>Server Name</label>
                <input type="text" value="{{ $servers->name }}" class="form-control" id="name" name="name">
              </div>
              <div class="form-group">
                <label>Short Name</label>
                <input type="text" value="{{ $servers->shortname }}" class="form-control" id="sname" name="sname">
              </div>
              <div class="form-group">
                <label>IP Address</label>
                <input type="text" value="{{ $servers->mip }}" class="form-control" id="ip" name="ip">
              </div>
              <div class="form-group">
                <label>Secondary IP Address</label>
                <input type="text" value="{{ $servers->ip2 }}" class="form-control" id="ip2" name="ip2">
              </div>
              <div class="form-group">
                <label>Server Username</label>
                <input type="text" value="{{ $servers->username }}" class="form-control" id="susername" name="susername">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" value="{{ $servers->password }}" class="form-control" id="pass" name="pass">
              </div>
              <div class="form-check form-check-flat form-check-primary">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" {{ $servers->enable=="1"? 'checked':'' }} name="enable"> Enable
                </label>
              </div>
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
            </form>
            <div>
                <form action="{{ route('server.destroy', $servers->id )}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a href="">Back</a>
  </div>

@endsection