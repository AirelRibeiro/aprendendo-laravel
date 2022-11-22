@extends('app')

@section('title', 'Login')
<!-- Modelo incluído a partir de -->
@section('content')
<div class="container">
  <form method="POST" action="{{ route('login') }}" class="border border-5d-flex p-5 bg-success p-2 text-dark bg-opacity-10 flex-column align-items-center position-absolute top-50 start-50 translate-middle">
    @csrf

    <div class="md-3">
      <label for="email" class="form-label">Email:</label>
      <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required autocomplete="email">

      @error('email')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Senha</label>
      <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="password" placeholder="********" required>

      @error('password')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>

    <button class="btn btn-secondary" type="submit">Login</button>
  </form>
</div>
@endsection