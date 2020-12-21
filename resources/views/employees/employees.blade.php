@extends('layout')

@section('content')

    <section class="page-title-wrapper">
        <h1 class="page-title">Робітники <span>Усі робітники компанії.</span></h1>
    </section>
    <section class="page-table-wrapper">
        <a href="{{ route("employees.create") }}" class="add-button">
            <img src="{{ asset('img/add_white.svg') }}">Додати робітника
        </a>
        <hr/>
        <table class="content-table">
            <thead>
            <tr>
                <th>Номер робітника</th>
                <th>Дані о робітниках</th>
                <th>Кількість робочих днів за місяць</th>
                <th>Підрозділ</th>
                <th>Дії</th>
            </tr>
            </thead>
            <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->employeeID }}</td>
                    <td>{{ $employee->employeeData }}</td>
                    <td>{{ $employee->employeeWorkingDays }}</td>
                    <td>{{ $employee->subdivisionID }}</td>
                    <td class="table-buttons-wrapper">
                        <a href="{{ route("employees.edit", $employee->employeeID) }}"><button type="submit">Редагувати</button></a>
                        <form method="POST" action="{{ route("employees.destroy", $employee->employeeID) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Видалити</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>

@endsection
