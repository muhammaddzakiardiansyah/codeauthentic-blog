<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/">Codepelita</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $active === 'about' ? 'active' : '' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $active === 'musica' ? 'active' : '' }}" href="/musica">Musica</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $active === 'posts' ? 'active' : '' }}" href="/posts">Posts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $active === 'data' ? 'active' : '' }}" href="/data">Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $active === 'categories' ? 'active' : '' }}" href="/categories">Categories</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Selamat Datang {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="post">
                    @csrf
                     <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>  Logout</button>
                  </form>
                  {{-- <a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i>  Logout</a> --}}
                </li>
              </ul>
            </li>
          @else
            <li class="nav-item">
              <a href="/login" class="nav-link {{ $active === 'login' ? 'active' : '' }}"><i class="bi bi-box-arrow-right"></i> Login</a>
            </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>