@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista Leków</h1>
    <a href="{{ route('leki.create') }}" class="btn btn-primary mb-3">Dodaj Lek</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nazwa</th>
                <th>Opis</th>
                <th>Rozmiar</th>
                <th>Ilość</th>
                <th>Cena</th>
                <th>Akcje</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($leki as $lek)
                <tr>
                    <td>{{ $lek->id }}</td>
                    <td>{{ $lek->nazwa }}</td>
                    <td>{{ $lek->opis_leku }}</td>
                    <td>{{ $lek->rozmiar }}</td>
                    <td>{{ $lek->ilosc }}</td>
                    <td>{{ $lek->cena }}</td>
                    <td>
                        <a href="{{ route('leki.edit', $lek) }}" class="btn btn-warning btn-sm">Edytuj</a>
                        <form action="{{ route('leki.destroy', $lek) }}" method="POST" class="d-inline">
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