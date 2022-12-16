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
      </div>
    </div>
  </nav>