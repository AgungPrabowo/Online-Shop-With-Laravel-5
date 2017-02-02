@extends('admins.layouts.master')

@section('title','Product')

@section('content')

<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<h1>Product</h1>
		<a href="{{route('product.create')}}" class="btn btn-success">Add Product</a>
		<table class="table table-stripped">
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Price</th>
				<th>Stock</th>
				<th>Action</th>
			</tr>
			<tr>
				<td scope="row"></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</table>
	</div>
</div>

@endsection