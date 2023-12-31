<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="{{ route ('site.principal') }}" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="{{ route ('site.contatos') }}" class="nav-link px-2 text-white">Contatos</a></li>
          <li><a href="{{ route ('site.sobrenos') }}" class="nav-link px-2 text-white">Sobre-nos</a></li>
        </ul>
        <div class="text-end">
          <a href="{{route('site.login')}}"><button type="button" class="btn btn-outline-light me-2">Login</button></a>
          <a href="{{route('site.criarConta')}}"><button type="button" class="btn btn-warning">Sign-up</button></a>
        </div>
      </div>
    </div>
  </header>