@extends('admins.layouts.master')

@section('Create User','title')

@section('content')
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <h1>Create User</h1>
      <form action="{{route('AdminPostSignup')}}" methd="post">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
      </form>
    </div>
  </div>
@endsection
