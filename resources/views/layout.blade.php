<!DOCTYPE html>
<html data-bs-theme="dark" lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ URL::asset('style.css') }}">
  <link rel="shortcut icon" href="{{ URL::asset('icons8-north-korea-48.png') }}">
</head>
<body class="bg-dark">
  <header class="p-3 text-bg-dark border-bottom">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/" class="nav-link px-2 text-white" id="home">Home</a></li>
        <li><a href="/features" class="nav-link px-2 text-white" id="features">Features</a></li>
        <li><a href="/pricing" class="nav-link px-2 text-white" id="pricing">Pricing</a></li>
        <li><a href="/reviews" class="nav-link px-2 text-white" id="reviews">Reviews</a></li>
        <li><a href="#" class="nav-link px-2 text-white">About</a></li>
      </ul>

      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
        <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
      </form>

      <div class="text-end">
        <button type="button" id="login-btn" class="btn btn-outline-light me-2">Login</button>   
        <button type="button" id="register-btn" class="btn btn-warning">Register</button>
      </div>
    </div>
  </div>
  
  </header>

  <div class="container">
    @yield('main_content')
  </div>

  <script src="{{ URL::asset('script.js') }}"></script>
</body>
</html>