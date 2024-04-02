
@extends('layouts.main')

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
                <input type="text" value="{{ $servers->name }}" class="form-control" id="exampleInputUsername1" name="name">
              </div>
              <div class="form-group">
                <label>Short Name</label>
                <input type="text" value="{{ $servers->shortname }}" class="form-control" id="exampleInputUsername1" name="sname">
              </div>
              <div class="form-group">
                <label>IP Address</label>
                <input type="text" value="{{ $servers->mip }}" class="form-control" id="exampleInputEmail1" name="ip">
              </div>
              <div class="form-group">
                <label>Secondary IP Address</label>
                <input type="text" value="{{ $servers->ip2 }}" class="form-control" id="exampleInputPassword1" name="ip2">
              </div>
              <div class="form-group">
                <label>Server Username</label>
                <input type="text" value="{{ $servers->username }}" class="form-control" id="exampleInputConfirmPassword1" name="susername">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" value="{{ $servers->password }}" class="form-control" id="exampleInputConfirmPassword1" name="pass">
              </div>
              <div class="form-check form-check-flat form-check-primary">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" {{ $servers->enable=="1"? 'checked':'' }} name="enable"> Enable
                </label>
              </div>
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
            </form>
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
    <a href="">Back</a>
  </div>

@endsection
