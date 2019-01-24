<header class="navbar justify-content-sm-between justify-content-end align-items-start flex-md-nowrap">
  <div class='d-flex flex-shrink-2'>
  <span id='logo-admin' class='d-sm-flex d-none flex-column align-items-center order-0 flex-shrink-2'>
      <a href="{!! route('home') !!}" class="navbar-brand m-0">
        <img src="{!! asset('images/logo_antwerpen.png') !!}" alt="Antwerpen" class="img-fluid logoimga"></a>
      </a>
      @auth
      <ul class="navbar-nav align-self-stretch">
        <li class="nav-item  d-flex justify-content-center bg-red"><a href="{!! route('admin.index') !!}" class='nav-link text-dark'>Admin</a></li>
      </ul>
      @endauth
  </span>  
  <h1 class='d-none d-md-block mt-2 mt-sm-3 mt-md-5 ml-2 apptitle order-2 order-md-1'>{{ env('APP_NAME') }}</h1>
  </div>
  <h1 class='d-md-none mt-2 mt-sm-3 mt-md-5 ml-2 apptitle order-2 order-md-1'>{{ env('APP_NAME') }}</h1>
  <span id="circlenav" class='order-1 order-md-2'>
    @if(Request::is('wat-is-het'))
    <object data="{!! asset('images/WATNAV.svg') !!}" type="image/svg+xml"></object>
    @elseif(Request::is('hoe-reageren*'))
    <object data="{!! asset('images/HOENAV.svg') !!}" type="image/svg+xml"></object>
    @elseif(Request::is('waar-kan-je-terecht*'))
    <object data="{!! asset('images/WAARNAV.svg') !!}" type="image/svg+xml"></object>
    @elseif(Request::is('*-verhaal'))
    <object data="{!! asset('images/HUNNAV.svg') !!}" type="image/svg+xml"></object>
    @endif
  </span>
</header>
