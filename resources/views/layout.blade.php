<!DOCTYPE html>
<html data-bs-theme="dark" lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ URL::asset('style.css') }}">
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
        <button type="button" id="sign-up-btn" class="btn btn-warning">Sign-up</button>
      </div>
    </div>
  </div>
  
  </header>

  <div class="container">
    @yield('main_content')
  </div>
  
  <div class="modal hide" style="margin-top: 7rem;" id="login">
    <form class="form-modal">
      <div class="modal-close" id="close-login">&times;</div>
      <h1 class="text-white forms text-shadow">Login</h1>
      <div class="forms center">
        <input id="email-form" class="form" type="email" placeholder="Email">
        <input id="password-form" class="form" type="password" placeholder="Password">
        <div class="text-white" style="padding: 0.75rem 0; margin: auto;">
          <input type="checkbox" id="rememberMe">
          <label class="text-shadow" for="rememberMe">Remember me</label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
      </div>  
    </form>
  </div>

  <div class="modal hide" style="margin-top: 7rem;" id="sign-up">
    <form class="form-modal">
      <div class="modal-close" id="close">&times;</div>
      <h1 class="text-white forms text-shadow">Sign-up</h1>
      <div class="forms center">
        <input id="email-form" class="form" type="email" placeholder="Email">
        <input id="password-form" class="form" type="password" placeholder="Password">
        <div class="text-white" style="padding: 0.75rem 0; margin: auto;">
          <input type="checkbox" id="rememberMe">
          <label class="text-shadow" for="rememberMe">Remember me</label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Sign-up</button>
      </div>  
    </form>
  </div>

  <script src="{{ URL::asset('script.js') }}"></script>
</body>
</html>