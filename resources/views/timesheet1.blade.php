@extends('layout')

@section('content')

    <section class="page-title-wrapper">
        <h1 class="page-title">Табелі <span>Табель по усім робітникам компанії за останній місяць.</span></h1>
    </section>
    <section class="page-table-wrapper">
        <table class="content-table">
            <thead>
            <tr>
                <th>Номер робітника</th>
                <th>Дані о робітниках</th>
                <th>Кількість відпр. днів</th>
                <th>Відрядження</th>
                <th>Відпустка</th>
                <th>Прогул</th>
                <th>Л/Л</th>
                <th>Підрозділ</th>
            </tr>
            </thead>
            <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->employeeID }}</td>
                    <td>{{ $employee->employeeData }}</td>
                    <td>{{ $employee->employeeWorkingDays }}</td>
                    <td>{{ $trips[$loop->index] }}</td>
                    <td>{{ $vacations[$loop->index] }}</td>
                    <td>{{ $absents[$loop->index] }}</td>
                    <td>{{ $hospitals[$loop->index] }}</td>
                    <td>{{ $employee->subdivisionID }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>

@endsection
