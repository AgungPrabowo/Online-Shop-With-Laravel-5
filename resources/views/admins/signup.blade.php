@extends('admins.layouts.master')

@section('title','Create User')

@section('content')
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <h1>Create User</h1>
      @if(count($errors) > 0)
        <div class="alert alert-danger">
          @foreach($errors->all() as $error)
            <p>{{$error}}</p>
          @endforeach
        </div>
      @endif
      <form action="{{route('AdminPostSignup')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control" value="{{old('email')}}" required>
        </div>
        <div class="form-group">
          <label for="first_name">First Name</label>
          <input type="text" name="first_name" class="form-control" value="{{old('first_name')}}" required>
        </div>
        <div class="form-group">
          <label for="last_name">Last Name</label>
          <input type="text" name="last_name" class="form-control" value="{{old('last_name')}}" required>
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
