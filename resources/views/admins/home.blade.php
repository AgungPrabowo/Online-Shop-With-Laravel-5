Hello, 
@if(Sentinel::check())
Your Logged, Your Name is {{Sentinel::getUser()->first_name}}
@endif
{{storage_path('app/public')}}
<a href="{{route('AdminGetLogout')}}">Logout</a>
<a href="{{route('kategori.index')}}">Kategori</a>
<a href="{{route('product.index')}}">Product</a>