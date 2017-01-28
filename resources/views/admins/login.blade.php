@extends('admins.layouts.master')

@section('Login Admin','title')

@section('content')
  <div class="row" style="background:red;">
    <div class="col-md-4 col-md-offset-4">
      <h1>Login Admin</h1>
      <form action="#" method="post">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
    </div>
  </div>
@endsection
