<header class="navbar justify-content-start align-items-start flex-nowrap">
  <span id='logo-admin' class='d-flex flex-column align-items-center'>
    <a href="{!! route('home') !!}" class="navbar-brand m-0">
      <img src="{!! asset('images/logo_antwerpen.png') !!}" alt="Antwerpen" class="logoimga"></a>
    </a>
    @auth
    <ul class="navbar-nav align-self-stretch">
      <li class="nav-item  d-flex justify-content-center bg-red"><a href="{!! route('admin.index') !!}" class='nav-link text-dark'>Admin</a></li>
    </ul>
    @endauth
  </span>
  <h1 class='mt-2 mt-sm-3 mt-md-5 ml-2'>{{ env('APP_NAME') }}</h1>
</header>
