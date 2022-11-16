@extends('app')

@section('title', 'Inserir palavras')

@section('content')
<h1>Nova palavra</h1>
<form action="{{ route('words.store') }}" method="POST">
  @csrf
  <div class="mb-3">
    <label for="word" class="form-label">Palavra</label>
    <input type="text" class="form-control" id="word" name="word" placeholder="Digite a palavra" required>
  </div>
  <div class="mb-3">
    <label for="meaning" class="form-label">Significado primário</label>
    <input type="text" class="form-control" id="meaning" name="meaning" placeholder="Digite o significado básico da palavra" required>
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Descrição</label>
    <textarea class="form-control" id="description" name="description" rows="6" placeholder="Detalhe a história e significados da palavra" required></textarea>
  </div>
  <div class="mb-3">
    <label for="aplication" class="form-label">Aplicação em frase</label>
    <input type="text" class="form-control" id="aplication" name="aplication" rows="" placeholder="Digite uma aplicação em frase" required>
  </div>

  <button class="btn btn-success" type="submit">Enviar</button>
</form>
@endsection