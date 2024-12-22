@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dodaj Lek</h1>
    <form action="{{ route('leki.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nazwa">Nazwa</label>
            <input type="text" name="nazwa" id="nazwa" class="form-control" value="{{ old('nazwa') }}" required>
            @error('nazwa') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="opis_leku">Opis</label>
            <textarea name="opis_leku" id="opis_leku" class="form-control" required>{{ old('opis_leku') }}</textarea>
            @error('opis_leku') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="rozmiar">Rozmiar (np. 10 tabletek, 250 ml)</label>
            <input type="text" name="rozmiar" id="rozmiar" class="form-control" value="{{ old('rozmiar') }}" required>
            @error('rozmiar') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="ilosc">Ilość</label>
            <input type="number" name="ilosc" id="ilosc" class="form-control" value="{{ old('ilosc') }}" required>
            @error('ilosc') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="cena">Cena (w PLN)</label>
            <input type="number" step="0.01" name="cena" id="cena" class="form-control" value="{{ old('cena') }}" required>
            @error('cena') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-success mt-3">Zapisz</button>
    </form>
</div>
@endsection