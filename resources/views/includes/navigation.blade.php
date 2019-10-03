<div id="navbar" class="firegorilla-nav">
  <header class="mobile-nav" role="banner">
    <button type="button" class="drawer-toggle drawer-hamburger">
      <span class="sr-only">toggle navigation</span>
      <span class="drawer-hamburger-icon"></span>
    </button>
    <nav class="drawer-nav" role="navigation">
      <a class="drawer-brand" href="business-solutions"><img src="{{ asset('https://storage.googleapis.com/fg-bucket/logo.svg') }}" alt="Firegorilla"></a>
      <ul class="drawer-menu">
        <li class="{{ (request()->is('/')) ? 'drawer-menu-active' : '' }}{{ (request()->is('business-solutions')) ? 'drawer-menu-active' : '' }}"><a class="drawer-menu-item" href="business-solutions" >Business Solutions</a></li>
        <li class="{{ (request()->is('agency-solutions')) ? 'drawer-menu-active' : '' }}"><a class="drawer-menu-item" href="agency-solutions">Agency Solutions</a></li>
        <li class="{{ (request()->is('nonprofit-solutions')) ? 'drawer-menu-active' : '' }}"><a class="drawer-menu-item" href="nonprofit-solutions">Nonprofit Solutions</a></li>
        <li class="{{ (request()->is('services')) ? 'drawer-menu-active' : '' }}"><a class="drawer-menu-item" href="services">Services</a></li>
        <li class="{{ (request()->is('resources')) ? 'drawer-menu-active' : '' }}"><a class="drawer-menu-item" href="resources">Resources</a></li>
      </ul>

      <ul class="account-menu">
        <li><a href="https://firegorilla.app/login" class="btn btn-gradient-text navi-small btn-block">Sign In</a></li>
        <li><a href="signup" class="btn btn-gradient navi-small btn-block">Sign Up</a></li>
      </ul>
    </nav>
  </header>
  <div class="logo">
    <a href="/"><img src="{{ asset('images/logo.svg') }}" alt="Firegorilla"></a>
  </div>
  <div class="navigation">
    <ul>
      <li class="{{ (request()->is('/')) ? 'active' : '' }}{{ (request()->is('business-solutions')) ? 'active' : '' }}"><a href="business-solutions" >Business Solutions</a></li>
      <li class="{{ (request()->is('agency-solutions')) ? 'active' : '' }}"><a href="agency-solutions" >Agency Solutions</a></li>
      <li class="{{ (request()->is('nonprofit-solutions')) ? 'active' : '' }}"><a href="nonprofit-solutions" >Nonprofit Solutions</a></li>
      <li class="{{ (request()->is('services')) ? 'active' : '' }}"><a href="services" >Services</a></li>
      <li class="{{ (request()->is('resources')) ? 'active' : '' }}"><a href="resources" >Resources</a></li>
    </ul>
  </div>
  <div class="join-navi">
    <ul>
      <li><a href="https://firegorilla.app/login" class="btn btn-gradient-text navi-small">Sign In</a></li>
      <li><a href="signup" class="btn btn-gradient navi-small">Sign Up</a></li>
    </ul>
  </div>
</div>
