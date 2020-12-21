@extends('layout')

@section('content')

    <section class="page-title-wrapper">
        <h1 class="page-title">Відрядження <span>Усі відрядження, у яких були робітники компанії.</span></h1>
    </section>
    <section class="page-table-wrapper">
        <a href="{{ route("businesstrips.create") }}" class="add-button" id="button-btrip">
            <img src="{{ asset('img/add_white.svg') }}">Додати відрядження
        </a>
        <hr/>
        <table class="content-table">
            <thead>
            <tr>
                <th>Номер відрядження</th>
                <th>Кількість пропущених днів</th>
                <th>Місяць</th>
                <th>Рік</th>
                <th>Робітник</th>
                <th>Дії</th>
            </tr>
            </thead>
            <tbody>
            @foreach($trips as $trip)
                <tr>
                    <td>{{ $trip->businessTripID }}</td>
                    <td>{{ $trip->businessTripDays }}</td>
                    <td>{{ $trip->businessTripMonth }}</td>
                    <td>{{ $trip->businessTripYear }}</td>
                    <td>{{ $trip->employeeID }}</td>
                    <td class="table-buttons-wrapper">
                        <a href="{{ route("businesstrips.edit", $trip->businessTripID) }}"><button type="submit">Редагувати</button></a>
                        <form method="POST" action="{{ route("businesstrips.destroy", $trip->businessTripID) }}">
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
