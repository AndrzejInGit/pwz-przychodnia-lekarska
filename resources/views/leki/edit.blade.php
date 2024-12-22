@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edytuj Lek</h1>
    <form action="{{ route('leki.update', $lek) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nazwa">Nazwa</label>
            <input type="text" name="nazwa" id="nazwa" class="form-control" value="{{ old('nazwa', $lek->nazwa) }}" required>
            @error('nazwa') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="opis_leku">Opis</label>
            <textarea name="opis_leku" id="opis_leku" class="form-control" required>{{ old('opis_leku', $lek->opis_leku) }}</textarea>
            @error('opis_leku') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="rozmiar">Rozmiar</label>
            <input type="text" name="rozmiar" id="rozmiar" class="form-control" value="{{ old('rozmiar', $lek->rozmiar) }}" required>
            @error('rozmiar') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="ilosc">Ilość</label>
            <input type="number" name="ilosc" id="ilosc" class="form-control" value="{{ old('ilosc', $lek->ilosc) }}" required>
            @error('ilosc') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="cena">Cena</label>
            <input type="number" step="0.01" name="cena" id="cena" class="form-control" value="{{ old('cena', $lek->cena) }}" required>
            @error('cena') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-success mt-3">Zaktualizuj</button>
    </form>
</div>
@endsection