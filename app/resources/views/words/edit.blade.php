@extends('app')

@section('title', 'Atualizar palavra')

@section('content')
<h1>Atualizando a palavra {{ $word->word }}</h1>


<form action="{{ route('words.update', $word) }}" method="POST">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label for="meaning" class="form-label">Significado primário</label>
    <input type="text" value="{{ $word->meaning }}" class="form-control" id="meaning" name="meaning" placeholder="Digite o significado básico da palavra" required>
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Descrição</label>
    <textarea class="form-control" id="description" name="description" rows="6" placeholder="Detalhe a história e significados da palavra" required>{{ $word->description }}</textarea>
  </div>
  <div class="mb-3">
    <label for="aplication" class="form-label">Aplicação em frase</label>
    <input type="text" value="{{ $word->aplication }}" class="form-control" id="aplication" name="aplication" rows="" placeholder="Digite uma aplicação em frase" required>
  </div>

  <button class="btn btn-success" type="submit">Atualizar</button>
</form>
@endsection