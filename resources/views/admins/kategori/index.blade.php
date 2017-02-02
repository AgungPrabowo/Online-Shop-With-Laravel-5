@extends('admins.layouts.master')

@section('title','Halaman Kategori')

@section('content')

	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1>Kategori</h1>
			<a href="{{ route('kategori.create') }}" class="btn btn-success pull-right">Add Kategori</a>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Nama</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					@foreach($kategoris->all() as $kategori)
					<tr>
						<th scope="row">{{$i++}}</th>
						<td>{{$kategori->name}}</td>
						<td>
							<a href="{{route('kategori.edit', $kategori->id)}}" class="btn btn-primary">Update</a>
				          	{!! Form::open(['method' => 'DELETE','route' => ['kategori.destroy', $kategori->id], 'style' => 'display:inline']) !!}
				          	{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
				          	{!! Form::close() !!}
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

@endsection