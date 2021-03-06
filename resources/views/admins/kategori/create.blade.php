@extends('admins.layouts.master')

@section('title','Halaman Kategori')

@section('content')

	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1>Tambah Kategori</h1>
			@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach($errors->all() as $error)
						<p>{{$error}}</p>
					@endforeach
				</div>
			@endif
			<form action="{{route('kategori.store')}}" method="post">
			{{csrf_field()}}
				<div class="form-group">
					<label for="name">Nama</label>
					<input type="text" name="name" value="{{old('name')}}" class="form-control" required>
				</div>
				<button type="submit" class="btn btn-primary">Create</button>
			</form>
		</div>
	</div>

@endsection