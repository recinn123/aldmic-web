<nav class="navbar navbar-expand-lg">
  <div class="container-fluid ps-5 pe-5">
    <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt="" style="width: auto; height:50px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link me-5  {{ Route::is('about.index') ? 'active fw-bold' : '' }}" href="{{ route('about.index') }}">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-5 " href="#">Product</a>
        </li>
        <li class="nav-item d-none d-lg-block" style="border-right: 2px solid">
          <a class="nav-link me-3 " href="#">Study Case</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-5 ms-3 {{ Route::is('contact-us.index') ? 'active fw-bold' : '' }}" href="{{ route('contact-us.index') }}">Contact us !</a>
        </li>
      </ul>
    </div>
  </div>
</nav>  