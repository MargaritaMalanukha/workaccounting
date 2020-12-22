@extends('layout')

@section('content')

    <section class="page-title-wrapper">
        <h1 class="page-title">Табелі <span>Табель по робітникам кожного з підрозділів, що мають прогули.</span></h1>
    </section>
    <section class="page-table-wrapper">
        <h2> Отримати табель по іншим підрозділам: </h2>
        <div class="division-links">
            @foreach($subdivisions as $subdivision)
                <a href="/timesheets/absent_list_by_subdivision/{{ $subdivision->subdivisionID }}">{{ $subdivision->subdivisionID }}</a>
            @endforeach
        </div>
        <hr/>
        <table class="content-table">
            <thead>
            <tr>
                <th>Номер робітника</th>
                <th>Дані о робітниках</th>
                <th>Кількість відпр. днів</th>
                <th>Прогул</th>
            </tr>
            </thead>
            <tbody>
            @foreach($employees as $employee)
                @if($absents[$loop->index] != 0)
                <tr>
                    <td>{{ $employee->employeeID }}</td>
                    <td>{{ $employee->employeeData }}</td>
                    <td>{{ $employee->employeeWorkingDays }}</td>
                    <td>{{ $absents[$loop->index] }}</td>
                </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </section>

@endsection
