<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="{{ route ('store.home') }}" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="{{ route ('store.clientes') }}" class="nav-link px-2 text-white">Clientes</a></li>
          <li><a href="{{ route ('store.fornecedores') }}" class="nav-link px-2 text-white">Fornecedores</a></li>
          <li><a href="{{ route ('store.produtos') }}" class="nav-link px-2 text-white">Produtos</a></li>
        </ul>
        <div class="text-end">
          <a href="{{route('store.sair')}}"><button type="button" class="btn btn-warning">Sair</button></a>
        </div>
      </div>
    </div>
  </header>