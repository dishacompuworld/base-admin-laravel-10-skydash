@extends('layouts.main')

@section('title')
  Add New Server
@endsection

@section('content')
<div class="content-wrapper">
    <div class="row">
      <div class="col-6 grid-margin stretch-card">
        <div class="card">
          <div class="row">
            <div class="col-md-12">
              <div class="card-body">
                <h4 class="card-title">Add New Server Details</h4>
            <form class="forms-sample" method="post" action="{{ route('server.store') }}">
                @csrf
              <div class="form-group">
                <label>Server Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                <span class="text-danger"> @error('name') {{ $message }} @enderror </span>
              </div>
              <div class="form-group">
                <label>Short Name</label>
                <input type="text" class="form-control @error('sname') is-invalid @enderror" id="sname" name="sname" value="{{ old('sname') }}">
                <span class="text-danger"> @error('sname') {{ $message }} @enderror </span>
              </div>
              <div class="form-group">
                <label>IP Address</label>
                <input type="text" class="form-control @error('ip') is-invalid @enderror" id="ip" name="ip"  value="{{ old('ip') }}">
                <span class="text-danger"> @error('ip') {{ $message }} @enderror </span>
              </div>
              <div class="form-group">
                <label>Secondary IP Address</label>
                <input type="text" class="form-control @error('ip2') is-invalid @enderror" id="ip2" name="ip2"  value="{{ old('ip2') }}">
                <span class="text-danger"> @error('ip2') {{ $message }} @enderror </span>
              </div>
              <div class="form-group">
                <label>Server Username</label>
                <input type="text" class="form-control @error('susername') is-invalid @enderror" id="susername" name="susername"  value="{{ old('susername') }}">
                <span class="text-danger"> @error('susername') {{ $message }} @enderror </span>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control @error('pass') is-invalid @enderror" id="pass" name="pass"  value="{{ old('pass') }}">
                <span class="text-danger"> @error('pass') {{ $message }} @enderror </span>
              </div>
              <div class="form-check form-check-flat form-check-primary">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" name="enable"> Enable
                </label>
              </div>
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a href="{{ URL::previous() }}" class="btn btn-light">Back</a>
  </div>

@endsection
