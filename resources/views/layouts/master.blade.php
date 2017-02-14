<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
	    @include('layouts.partial.menu')
		@yield('content')
	</div>
    <script type="text/javascript" src="/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
