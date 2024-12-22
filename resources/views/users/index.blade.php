@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista Użytkowników</h1>
    <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Dodaj Użytkownika</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Rola</th>
                <th>Email</th>
                <th>Akcje</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->imie }}</td>
                    <td>{{ $user->nazwisko }}</td>
                    <td>{{ $user->rola }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user) }}" class="btn btn-warning btn-sm">Edytuj</a>
                        <form action="{{ route('users.destroy', $user) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Czy na pewno chcesz usunąć?')">Usuń</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection