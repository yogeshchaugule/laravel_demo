<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
      @unless (empty($title))
        {{ $title }}
      @else
        Laravel
      @endunless
    </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- <link href="{{ elixir('css/styles.css') }}" rel="stylesheet" type="text/css"> -->

    @yield('header_script')
  </head>
  <body class="html">
    @yield('header_top')

    <div class="container flex-center position-ref full-height">
      @if (Route::has('login'))
        <div class="top-right links">
          <a href="{{ url('/login') }}">Login</a>
          <a href="{{ url('/register') }}">Register</a>
        </div>
      @endif

      @yield('header')

      @yield('content')

      @yield('footer')
    </div>

    @yield('footer_script')
  </body>
</html>
