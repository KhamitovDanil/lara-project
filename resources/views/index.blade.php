@extends('layouts.app')

@section('content')

<h1 class="mb-3">Авторизация</h1>
<form method="post" action="{{ route('login') }}">
  <div class="mb-3">
    <label for="login" class="form-label">Логин</label>
    <input type="text" class="form-control" id="login" name="login">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Пароль</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Авторизоваться</button>
</form>

@endsection