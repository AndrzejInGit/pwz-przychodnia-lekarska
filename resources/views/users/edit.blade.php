@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edytuj Użytkownika</h1>
    <form action="{{ route('users.update', $user) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="imie">Imię</label>
            <input type="text" name="imie" id="imie" class="form-control" value="{{ old('imie', $user->imie) }}" required>
            @error('imie') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="nazwisko">Nazwisko</label>
            <input type="text" name="nazwisko" id="nazwisko" class="form-control" value="{{ old('nazwisko', $user->nazwisko) }}" required>
            @error('nazwisko') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="rola">Rola</label>
            <select name="rola" id="rola" class="form-control" required>
                <option value="admin" {{ $user->rola == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="lekarz" {{ $user->rola == 'lekarz' ? 'selected' : '' }}>Lekarz</option>
                <option value="recepcjonista" {{ $user->rola == 'recepcjonista' ? 'selected' : '' }}>Recepcjonista</option>
            </select>
            @error('rola') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $user->email) }}" required>
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-success mt-3">Zaktualizuj</button>
    </form>
</div>
@endsection