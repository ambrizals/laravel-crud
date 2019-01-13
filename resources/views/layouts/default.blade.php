<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    @include('includes.header_style')

    <title>@yield('title')</title>
  </head>
  <body>
  	<!-- Header -->
    @include('includes.header')
    <div class="jumbotron">
      <h1 class="display-4 text-center">@yield('title')</h1>
    </div>
  	<div class="container">
      @if (session('messages'))
        <div class="alert alert-success col-md-12 mt-4" role="alert">{{ session('messages') }}</div>
      @endif
	  	@yield('content')
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    @include('includes.footer_script')
  </body>
</html>