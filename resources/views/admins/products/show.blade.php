@extends('admins.layouts.master')

@section('title','Show Product')

@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-4">
		<li>{{$product->name}}</li>
		<li>{{$product->kategori->name}}</li>
		<li>{{$product->price}}</li>
		<li>{{$product->description}}</li>
		<li><img src="" alt=""></li>
		<li>{{$product->stock}}</li>
	</div>
</div>

@endsection