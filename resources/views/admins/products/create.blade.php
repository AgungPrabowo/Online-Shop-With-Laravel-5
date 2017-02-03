@extends('admins.layouts.master')

@section('title','Add Product')

@section('content')

<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<h1>Create Product</h1>
		@if(count($errors) > 0)
			<div class="alert alert-danger">
				@foreach($errors->all() as $error)
				<p>{{$error}}</p>
				@endforeach
			</div>
		@endif
		{!!Form::open(['route' => 'product.store','method' => 'post','files' => true])!!}
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Title Product" required>
		</div>
		<div class="form-group">
			<label for="kategoris">Kategori</label>
			{{Form::select('kategori', $rowKategori, null, ['class' => 'form-control', 'placeholder' => 'Select'])}}
		</div>
		<div class="form-group">
			<label for="price">Price</label>
			<input type="text" name="price" value="{{old('price')}}" class="form-control" placeholder="Price Product" required>
		</div>
		<div class="form-group">
			<label for="description">Description</label>
			<textarea name="description" class="form-control" rows="5" placeholder="Description Product">{{old('description')}}</textarea>
		</div>
		<div class="form-group">
			<label for="images">Images</label>
			<input type="file" name="images" class="form-control" accept="image/*">
		</div>
		<div class="form-group">
			<label for="stock">Stock</label>
			<input type="text" name="stock" class="form-control" value="{{old('stock')}}" placeholder="Stock Product" required>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Create</button>
		</div>
		{!!Form::close()!!}
	</div>
</div>

@endsection