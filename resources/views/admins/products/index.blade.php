@extends('admins.layouts.master')

@section('title','Product')

@section('content')

<div class="row">
	<div class="col-md-5 col-md-offset-4">
		<h1>Product</h1>
		<a href="{{route('product.create')}}" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Add Product</a>
		<table class="table table-stripped">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Price</th>
					<th>Stock</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			@foreach($products->all() as $product)
				<tr>
					<td scope="row">{{$i++}}</td>
					<td>{{$product->name}}</td>
					<td>{{$product->price}}</td>
					<td>{{$product->stock}}</td>
					<td>
						<a href="{{route('product.edit', $product->id)}}" class="btn btn-primary">Edit</a>
						<a href="{{route('product.show', $product->id)}}" class="btn btn-warning">Show</a>
						{!! Form::open(['method' => 'DELETE','route' => ['product.destroy', $product->id], 'style' => 'display:inline']) !!}
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