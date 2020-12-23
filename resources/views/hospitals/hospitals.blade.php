@extends('layout')

@section('content')

    <section class="page-title-wrapper">
        <h1 class="page-title">Лікарняні <span>Усі лікарняні, що були взяті робітниками компанії.</span></h1>
    </section>
    <section class="page-table-wrapper">
        <a href="{{ route("hospitals.create") }}" class="add-button" id="button-hospital">
            <img src="{{ asset('img/add_white.svg') }}">Додати лікарняний
        </a>
        <hr/>
        <table class="content-table">
            <thead>
            <tr>
                <th>Номер лікарняного</th>
                <th>Кількість пропущених днів</th>
                <th>Місяць</th>
                <th>Рік</th>
                <th>Номер робітника</th>
                <th>Особисті дані</th>
                <th>Дії</th>
            </tr>
            </thead>
            <tbody>
            @foreach($hospitals as $hospital)
                <tr>
                    <td>{{ $hospital->hospitalID }}</td>
                    <td>{{ $hospital->hospitalDays }}</td>
                    <td>{{ $hospital->hospitalMonth }}</td>
                    <td>{{ $hospital->hospitalYear }}</td>
                    <td style="text-align: center">{{ $hospital->employeeID }}</td>
                    <td>{{ $employees[$loop->index]->employeeData }}</td>
                    <td class="table-buttons-wrapper">
                        <a href="{{ route("hospitals.edit", $hospital->hospitalID) }}"><button type="submit">Редагувати</button></a>
                        <form method="POST" action="{{ route("hospitals.destroy", $hospital->hospitalID) }}">
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
