
@extends('layouts.main')

@section('title')
  Update Servers
@endsection

@section('content')
<div class="content-wrapper">
    <div class="row">
      <div class="col-4 grid-margin stretch-card">
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
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $servers->name }}">
                    <span class="text-danger"> @error('name') {{ $message }} @enderror </span>
                  </div>
                  <div class="form-group">
                    <label>Short Name</label>
                    <input type="text" class="form-control @error('sname') is-invalid @enderror" id="sname" name="sname" value="{{ $servers->shortname }}">
                    <span class="text-danger"> @error('sname') {{ $message }} @enderror </span>
                  </div>
                  <div class="form-group">
                    <label>IP Address</label>
                    <input type="text" class="form-control @error('ip') is-invalid @enderror" id="ip" name="ip"  value="{{ $servers->mip }}">
                    <span class="text-danger"> @error('ip') {{ $message }} @enderror </span>
                  </div>
                  <div class="form-group">
                    <label>Secondary IP Address</label>
                    <input type="text" class="form-control @error('ip2') is-invalid @enderror" id="ip2" name="ip2"  value="{{ $servers->ip2 }}">
                    <span class="text-danger"> @error('ip2') {{ $message }} @enderror </span>
                  </div>
                  <div class="form-group">
                    <label>Server Username</label>
                    <input type="text" class="form-control @error('susername') is-invalid @enderror" id="susername" name="susername"  value="{{ $servers->username }}">
                    <span class="text-danger"> @error('susername') {{ $message }} @enderror </span>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control @error('pass') is-invalid @enderror" id="pass" name="pass"  value="{{ $servers->password }}">
                    <span class="text-danger"> @error('pass') {{ $message }} @enderror </span>
                  </div>
              <div class="form-check form-check-flat form-check-primary">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" {{ $servers->enable=="1"? 'checked':'' }} name="enable"> Enable
                </label>
              </div>
              <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            </form>
            <div>
                <form action="{{ route('server.destroy', $servers->id )}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
                <a href="{{ URL::previous() }}" class="btn btn-primary btn-sm">Back</a>
            </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
