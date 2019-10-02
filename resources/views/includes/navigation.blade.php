<div id="navbar" class="firegorilla-nav">
  <header class="mobile-nav" role="banner">
    <button type="button" class="drawer-toggle drawer-hamburger">
      <span class="sr-only">toggle navigation</span>
      <span class="drawer-hamburger-icon"></span>
    </button>
    <nav class="drawer-nav" role="navigation">
      <ul class="drawer-menu">
        <li><a class="drawer-brand" href="/"><img src="{{ asset('https://storage.googleapis.com/fg-bucket/logo.svg') }}" alt="Firegorilla"></a></li>
        <li><a class="drawer-menu-item" href="/" >Business Solutions</a></li>
        <li><a class="drawer-menu-item" href="agency-solutions">Agency Solutions</a></li>
        <li><a class="drawer-menu-item" href="resources">Resources</a></li>
      </ul>
    </nav>
  </header>
  <div class="logo">
    <a href="/"><img src="{{ asset('images/logo.svg') }}" alt="Firegorilla"></a>
  </div>
  <div class="navigation">
    <ul>
      <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="/" >Business Solutions</a></li>
      <li class="{{ (request()->is('agency-solutions')) ? 'active' : '' }}"><a href="agency-solutions" >Agency Solutions</a></li>
      <li class="{{ (request()->is('resources')) ? 'active' : '' }}"><a href="resources" >Resources</a></li>
    </ul>
  </div>
  <div class="join-navi">
    <ul>
      <li><a href="https://firegorilla.app/login" class="btn btn-gradient-text navi-small">Sign In</a></li>
      <li><a href="/signup" class="btn btn-gradient navi-small">Sign Up</a></li>
    </ul>
  </div>
</div>
