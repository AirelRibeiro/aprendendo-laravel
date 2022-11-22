@extends('app')

@section('title', 'Registro')

@section('content')
<div class="container">
  <form method="POST" action="{{ route('register') }}" class="border border-5d-flex p-5 bg-success p-2 text-dark bg-opacity-10 flex-column align-items-center position-absolute top-50 start-50 translate-middle">
    @csrf

    <div class="md-3">
      <label for="email" class="form-label">Nome:</label>
      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

      @error('name')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
    <div class="md-3">
      <label for="email" class="form-label">Email:</label>
      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

      @error('email')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
    <div class="md-3">
      <label for="password" class="form-label">Senha:</label>
      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

      @error('password')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
    <div class="md-3">
      <label for="password" class="form-label">Confirme senha:</label>
      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

      @error('password')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
    <button class="btn btn-secondary mt-3" type="submit">
      Cadastrar
    </button>
  </form>
</div>
@endsection