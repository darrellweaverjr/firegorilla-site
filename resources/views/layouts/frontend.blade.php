<!DOCTYPE html>
<html  ng-app="firegorillaApp" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firegorilla</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- drawer.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>

<body class="drawer drawer--left">

  <main role="main">

  <div id="navbar" class="firegorilla-nav">
    <header class="mobile-nav" role="banner">
      <button type="button" class="drawer-toggle drawer-hamburger">
        <span class="sr-only">toggle navigation</span>
        <span class="drawer-hamburger-icon"></span>
      </button>
      <nav class="drawer-nav" role="navigation">
        <ul class="drawer-menu">
          <li><a class="drawer-brand" href="#"><img src="{{ asset('images/logo.svg') }}" alt="Firegorilla"></a></li>
          <li><a class="drawer-menu-item" href="/business-solutions" >Business Solutions</a></li>
          <li><a class="drawer-menu-item" href="/agency-solutions">Agency Solutions</a></li>
          <li><a class="drawer-menu-item" href="/resources">Resources</a></li>
        </ul>
      </nav>
    </header>
    <div class="logo">
      <img src="{{ asset('images/logo.svg') }}" alt="Firegorilla">
    </div>
    <div class="navigation">
      <ul>
        <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="/" >Business Solutions</a></li>
        <li class="{{ (request()->is('/agency-solutions')) ? 'active' : '' }}"><a href="/agency-solutions" >Agency Solutions</a></li>
        <li class="{{ (request()->is('/resources')) ? 'active' : '' }}"><a href="/resources" >Resources</a></li>
      </ul>
    </div>
    <div class="join-navi">
      <ul>
        <li><a href="https://firegorilla.app/login" class="btn btn-gradient-text navi-small">Sign In</a></li>
        <li><a href="signup.php" class="btn btn-gradient navi-small">Sign Up</a></li>
      </ul>
    </div>
  </div>

  @yield('content')

    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="footer-logo">
              <img src="{{ asset('images/logo.svg') }}" alt="Firegorilla">
            </div>
            <div class="copyright-txt">© Copyright 2019 - FireGorilla.com</div>
          </div>
          <div class="col-md-3">
            <ul class="footer-btns">
              <li>Home</li>
              <li>Business Solutions</li>
              <li>Agency Solutions</li>
              <li>Contact Us</li>
            </ul>
          </div>
          <div class="col-md-3">
            <ul class="footer-btns">
              <li><a href="signup.php">Sign up</a></li>
              <li>Sign in</li>
              <li>Support</li>
              <li>Documentation</li>
            </ul>
          </div>
          <div class="col-md-3">
            <ul class="footer-btns">
              <li>Resources</li>
              <li>Terms of Service</li>
              <li>Privacy Policy</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-2">
      <div class="new-epoch-logo">
        <img src="{{ asset('images/new-epoch.svg') }}">
      </div>
    </div>
  </main>

    <script
      src="https://code.jquery.com/jquery-1.12.4.min.js"
      integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
      crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/greensock/TweenMax.min.js') }}"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{ asset('_/js/jquery-1.9.1.min.js') }}"><\/script>')</script>
    <script type="text/javascript" src="{{ asset('js/jquery.superscrollorama.js') }}"></script>
    <!-- <script type="text/javascript" src="{{ asset('js/jquery.stellar.min.js') }}"></script> -->
    <script type="text/javascript" src="{{ asset('js/waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
    <!-- drawer.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
