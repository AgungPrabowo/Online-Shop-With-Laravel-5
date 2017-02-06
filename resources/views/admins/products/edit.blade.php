@extends('admins.layouts.master')

@section('title','Edit Product')

@section('content')

	{!! Form::model($product, ['method' => 'PATCH','route' => ['product.update', $product->id], 'files' => true]) !!}
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<h1>Edit Product</h1>
				@if(count($errors) > 0)
					<div class="alert alert-danger">
						@foreach($errors->all() as $error)
							<p>{{$error}}</p>
						@endforeach
					</div>
				@endif
				<div class="form-group">
					<label for="name">Name</label>
					{!! Form::text('name', null, ['class' => 'form-control', 'required' => true]) !!}
				</div>
				<div class="form-group">
					<label for="kategori">Kategori</label>
					{!! Form::select('kategori_id', $kategoris, $product->kategori_id, ['class' => 'form-control']) !!}
				</div>	
				<div class="form-group">
					<label for="price">Price</label>
					{!! Form::text('price', null, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					<label for="description">Description</label>
					{!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '5']) !!}
				</div>
				<div class="form-group">
					<label for="image">Image</label>
					{!! Form::file('image', ['class' => 'form-control']) !!}
					<img src="{{route('ImageProduct', $product->images)}}">
				</div>
				<div class="form-group">
					<label for="stock">Stock</label>
					{!! Form::text('stock', null, ['class' => 'form-control']) !!}
				</div>
				<button type="submit" class="btn btn-primary">Update</button>
			</div>
		</div>
	{!! Form::close() !!}

@endsection