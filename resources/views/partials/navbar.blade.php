	<!--Navbar Start-->
<nav class="navbar navbar-expand-lg fixed-top" id="navbar">
	<div class="container">
    <a class="navbar-brand logo" href="#">
      <img 
        src="{{ asset('/images/logo-dark.png') }}" 
        alt="" 
        height="30"
        class="logo-dark" 
      />
      <img 
        src="{{ asset('/images/logo-light.png') }}" 
        alt=""
        height="30" 
        class="logo-light"
      />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
      aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"
    >
      <i class="" data-feather="menu"></i>
    </button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav ms-auto navbar-center" id="navbar-navlist">
				<li class="nav-item magic-hover magic-hover__square">
					<a href="#" class="nav-link active">Home</a>
				</li>
				<li class="nav-item magic-hover magic-hover__square">
					<a href="#" class="nav-link">Cek DPT</a>
				</li> 
				
				<li class="nav-item magic-hover magic-hover__square">
					<a href="#" class="nav-link">Timeline</a>
				</li>
				
				<li class="nav-item magic-hover magic-hover__square">
					<a href="#" class="nav-link">Kandidat</a>
				</li>
			</ul>
			<a href="#" class=" btn btn-sm rounded-pill nav-btn ms-lg-3">Live Count</a>
			<a href="#" class=" btn btn-sm rounded-pill nav-btn ms-lg-3">Registrasi Ulang</a>
			<a href="#>" class=" btn btn-sm rounded-pill nav-btn ms-lg-3">Login</a>
		</div>
	</div> <!-- end container -->
</nav> <!-- Navbar End -->


{{-- <nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top w-100 p-3">
  <div class="container" style="padding: 0 6.5rem">
    <a class="navbar-brand" href="{{ url('/') }}">
      <img 
        id="navbarLogo"
        src="{{ asset('images/logo-light.png') }}" 
        alt="" 
        width="116"
      />
    </a>
    <button id="navbarToggler" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav me-auto">

      </ul>
      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ms-auto gap-3">
        <!-- Authentication Links -->
        @guest
          <li class="nav-item">
            <a class="nav-link active" href="">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Cek DPT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Timeline</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Kandidat</a>
          </li>
          <li class="nav-item d-flex gap-3">
            <a href="#" class="nav-link nav-link-secondary border text-white px-4 rounded-pill fw-semibold">
              Live Count
            </a>
            @if (Route::has('login'))
              <a href="{{ route('login') }}" class="nav-link nav-link-secondary border text-white px-4 rounded-pill fw-semibold">
                {{ __('Masuk') }}
              </a>
            @endif
            @if (Route::has('register'))
              <a href="{{ route('register') }}" class="nav-link nav-link-primary bg-white fw-medium text-primary px-4 rounded-pill fw-semibold">
                {{ __('Registrasi Ulang') }}
              </a>
            @endif
          </li>
        @else
          <li class="nav-item dropdown">
            <a href="#" id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a 
                href="{{ route('logout') }}"
                class="dropdown-item" 
                onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"
              >
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>
          </li>
        @endguest
      </ul>
    </div>
  </div>
</nav> --}}