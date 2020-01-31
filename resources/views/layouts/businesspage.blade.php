<!DOCTYPE html>
<html  ng-app="firegorillaApp" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firegorilla</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="icon" type="image/x-icon" href="https://storage.googleapis.com/fg-bucket/favicon.ico">
  	<meta property="og:image:width" content="1200">
  	<meta property="og:image:height" content="628">
    <meta property="og:image" content="https://storage.googleapis.com/fg-bucket/firegorilla-og.jpg">
  	<meta property="og:title" content="Firegorilla">
  	<meta property="og:description" content="If you're ready to attract more customers but don't know where to start with Google Ads, Fire Gorilla is your end-to-end solution!">
  	<meta property="og:url" content="https://firegorilla.com">
  </head>

<body class="drawer drawer--left">

  <main role="main">

  @include('includes.navigation')

  @yield('content')

  @include('includes.footer')

  </main>

  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/46ce86028b.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="{{ asset('js/greensock/TweenMax.min.js') }}"></script>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
  <script>window.jQuery || document.write('<script src="{{ asset('_/js/jquery-1.9.1.min.js') }}"><\/script>')</script>
  <script type="text/javascript" src="{{ asset('js/jquery.superscrollorama.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/waypoints.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
  <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
