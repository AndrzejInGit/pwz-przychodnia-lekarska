@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dodaj Użytkownika</h1>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="imie">Imię</label>
            <input type="text" name="imie" id="imie" class="form-control" value="{{ old('imie') }}" required>
            @error('imie') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="nazwisko">Nazwisko</label>
            <input type="text" name="nazwisko" id="nazwisko" class="form-control" value="{{ old('nazwisko') }}" required>
            @error('nazwisko') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="rola">Rola</label>
            <select name="rola" id="rola" class="form-control" required>
                <option value="admin">Admin</option>
                <option value="lekarz">Lekarz</option>
                <option value="recepcjonista">Recepcjonista</option>
            </select>
            @error('rola') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="password">Hasło</label>
            <input type="password" name="password" id="password" class="form-control" required>
            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-success mt-3">Zapisz</button>
    </form>
</div>
@endsection