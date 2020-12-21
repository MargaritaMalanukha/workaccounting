@extends('layout')

@section('content')

    <section class="page-title-wrapper">
        <h1 class="page-title">Робітники <span>Усі робітники компанії.</span></h1>
    </section>
    <section class="page-table-wrapper">
        <a href="{{ route("employees.create") }}" class="add-button">
            <img src="{{ asset('img/add_white.svg') }}">Add employee
        </a>
        <table class="content-table">
            <thead>
            <tr>
                <th>№</th>
                <th>Дані о робітниках</th>
                <th>Підрозділ</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->employeeID }}</td>
                    <td>{{ $employee->employeeData }}</td>
                    <td>{{ $employee->subdivisionID }}</td>
                    <td>
                        <a href="{{ route("employees.edit", $employee->employeeID) }}"><button type="submit">Edit</button></a>
                        <form method="POST" action="{{ route("employees.destroy", $employee->employeeID) }}">
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
