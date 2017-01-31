@extends('admins.layouts.master')

@section('title','Halaman Kategori')

@section('content')

	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1>Kategori</h1>
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
							<a href="{{route('kategori.edit', $kategori->id)}}">Update</a>
							<a href="{{route('kategori.destroy', $kategori->id)}}">Delete</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

@endsection