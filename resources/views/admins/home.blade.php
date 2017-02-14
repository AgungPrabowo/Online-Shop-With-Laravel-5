Hello, 
@if(Sentinel::check())
Your Logged, Your Name is {{Sentinel::getUser()->first_name}}
@endif
<li><a href="{{route('kategori.index')}}">Kategori</a></li>
<li><a href="{{route('product.index')}}">Product</a></li>
<li><a href="{{route('AdminGetLogout')}}">Logout</a></li>