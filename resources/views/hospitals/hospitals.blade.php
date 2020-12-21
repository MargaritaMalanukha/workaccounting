@extends('layout')

@section('content')

    <section class="page-title-wrapper">
        <h1 class="page-title">Лікарняні <span>Усі лікарняні, що були взяті робітниками компанії.</span></h1>
    </section>
    <section class="page-table-wrapper">
        <a href="{{ route("hospitals.create") }}" class="add-button">
            <img src="{{ asset('img/add_white.svg') }}">Add hospital
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
            @foreach($hospitals as $hospital)
                <tr>
                    <td>{{ $hospital->hospitalID }}</td>
                    <td>{{ $hospital->hospitalDays }}</td>
                    <td>{{ $hospital->hospitalMonth }}</td>
                    <td>{{ $hospital->hospitalYear }}</td>
                    <td>{{ $hospital->employeeID }}</td>
                    <td>
                        <a href="{{ route("hospitals.edit", $hospital->hospitalID) }}"><button type="submit">Edit</button></a>
                        <form method="POST" action="{{ route("hospitals.destroy", $hospital->hospitalID) }}">
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
