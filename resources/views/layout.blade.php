<!DOCTYPE html>
<html data-bs-theme="dark" lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ URL::asset('style.css') }}">
  <link rel="shortcut icon" href="{{ URL::asset('icons/icons8-крыса-48.png') }}">
</head>
<body class="bg-dark">
  <header class="p-3 text-bg-dark border-bottom">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
          <use xlink:href="#bootstrap"></use>
        </svg>
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/" class="nav-link px-2 text-white" id="home">Главная</a></li>
        <li><a href="/reviews" class="nav-link px-2 text-white" id="reviews">Отзывы</a></li>
        <li><a href="#" class="nav-link px-2 text-white">О нас</a></li>
      </ul>

      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
        <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Поиск..." aria-label="Search">
      </form>

      <div class="text-end">
        <a href="/login"><button type="button" id="login-btn" class="btn btn-outline-light me-2">Войти</button></a>
        <a href="/register"><button type="button" id="register-btn" class="btn btn-warning me-2">Регистрация</button></a>
        <a href="/basket"><button type="button" id="basket" class="btn btn-outline-light">Корзина</button></a>
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