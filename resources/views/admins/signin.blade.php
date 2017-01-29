@extends('admins.layouts.master')

@section('title','Login Admin')

@section('content')
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <h1>Login Admin</h1>
      @if(count($errors) > 0)
        <div class="alert alert-danger">
          @foreach($errors->all() as $error)
            <p>{{$error}}</p>
          @endforeach
        </div>
        @elseif(Session::has('status'))
          <div class="alert alert-danger">
            <p>{{Session::get('status')}}</p>
          </div>
        @endif
      <form action="{{route('AdminPostSignin')}}" method="post">
      {{csrf_field()}}
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control" value="{{old('email')}}" required>
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
