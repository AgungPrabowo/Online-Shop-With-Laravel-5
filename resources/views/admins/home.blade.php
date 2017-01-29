home.blade.php
@if(Auth::check())
Your Logged, Your Name is {{Auth::user()->name}}
@endif
<a href="{{route('AdminGetLogout')}}">Logout</a>
<a href="{{route('kategori.index')}}">Kategori</a>