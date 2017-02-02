@extends('admins.layouts.master')

@section('title','Add Product')

@section('content')

<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<h1>Create Product</h1>
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Title Product" required>
		</div>
		<div class="form-group">
			<label for="kategoris">Kategoris</label>
			<select name="kategoris" class="form-control">
				<option value="0">---Select---</option>
				@foreach($kategoris as $kategori)
				<option value="{{$kategori->id}}">{{$kategori->name}}</option>
				@endforeach
			</select>
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
			<input type="file" name="images" class="form-control">
		</div>
		<div class="form-group">
			<label for="stock">Stock</label>
			<input type="text" name="stock" class="form-control" value="{{old('stock')}}" placeholder="Stock Product" required>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Create</button>
		</div>
	</div>
</div>

@endsection