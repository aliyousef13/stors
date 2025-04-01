<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Product Shop')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
      .sidebar {
        height: 100vh;
        background-color: #f8f9fa;
      }
      .sidebar .nav-link.active {
        background-color: #e9ecef;
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="{{ route('products.index') }}">Product Shop</a>
    </header>
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block sidebar">
          <div class="position-sticky pt-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link {{ request()->is('products') ? 'active' : '' }}" href="{{ route('products.index') }}">
                  <i class="bi bi-house-fill"></i>
                  Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('products/create') ? 'active' : '' }}" href="{{ route('products.create') }}">
                  <i class="bi bi-plus-circle"></i>
                  Add Product
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
          @if(session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
          @endif

          @yield('content')
        </main>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
