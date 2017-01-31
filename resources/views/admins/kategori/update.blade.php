@extends('admins.layouts.master')

@section('title','Update Katergori')

@section('content')

	{!! Form::model($kategori, ['method' => 'PATCH','route' => ['kategori.update', $kategori->id]]) !!}
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<h1>Update Kategori</h1>
				<div class="form-group">
					<label>Name</label>
					{!! Form::text('name', null, ['class' => 'form-control','required' => 'true']) !!}
				</div>
			</div>
			<div class="col-md-4 col-md-offset-4">
				<button type="submit" class="btn btn-primary">Create</button>
			</div>
		</div>
	{!! Form::close() !!}

@endsection