<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Чистый дом')</title>
    @yield('head')
</head>
<body>

@if (isset($message))
  <div class="alert alert-info" role="alert">
    {{$message}}
  </div>
@endif
    
<nav class="navbar navbar-expand-lg bg-body-tertiary mb-3">
  <div class="container">
    <a class="navbar-brand" href="/">Чайный дом</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('signup') }}">Регистрация</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Авторизация</a>
        </li>
    </div>
  </div>
</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>