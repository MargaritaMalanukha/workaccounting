@extends('layout')

@section('content')

    <section class="page-title-wrapper">
        <h1 class="page-title">Прогули <span>Усі прогули робітників компанії.</span></h1>
    </section>
    <section class="page-table-wrapper">
        <a href="{{ route("absents.create") }}" class="add-button">
            <img src="{{ asset('img/add_white.svg') }}">Додати прогули
        </a>
        <table class="content-table">
            <thead>
            <tr>
                <th>№</th>
                <th>Кількість пропущених днів</th>
                <th>Місяць</th>
                <th>Рік</th>
                <th>Робітник</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($absents as $absent)
                <tr>
                    <td>{{ $absent->absentID }}</td>
                    <td>{{ $absent->absentDays }}</td>
                    <td>{{ $absent->absentMonth }}</td>
                    <td>{{ $absent->absentYear }}</td>
                    <td>{{ $absent->employeeID }}</td>
                    <td>
                        <a href="{{ route("absents.edit", $absent->absentID) }}"><button type="submit">Edit</button></a>
                        <form method="POST" action="{{ route("absents.destroy", $absent->absentID) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>

@endsection
