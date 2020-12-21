@extends('layout')

@section('content')

    <section class="page-title-wrapper">
        <h1 class="page-title">Відпустки <span>Усі відпустки, що були взяті робітниками компанії.</span></h1>
    </section>
    <section class="page-table-wrapper">
        <a href="{{ route("vacations.create") }}" class="add-button">
            <img src="{{ asset('img/add_white.svg') }}">Додати відпустку
        </a>
        <hr/>
        <table class="content-table">
            <thead>
            <tr>
                <th>Номер відпустки</th>
                <th>Кількість відпусток</th>
                <th>Місяць</th>
                <th>Рік</th>
                <th>Робітник</th>
                <th>Дії</th>
            </tr>
            </thead>
            <tbody>
            @foreach($vacations as $vacation)
                <tr>
                    <td>{{ $vacation->vacationID }}</td>
                    <td>{{ $vacation->vacationDays }}</td>
                    <td>{{ $vacation->vacationMonth }}</td>
                    <td>{{ $vacation->vacationYear }}</td>
                    <td>{{ $vacation->employeeID }}</td>
                    <td class="table-buttons-wrapper">
                        <a href="{{ route("vacations.edit", $vacation->vacationID) }}"><button type="submit">Редагувати</button></a>
                        <form method="POST" action="{{ route("vacations.destroy", $vacation->vacationID) }}">
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
