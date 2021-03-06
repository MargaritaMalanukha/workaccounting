@extends('layout')

@section('content')

    <section class="page-title-wrapper">
        <h1 class="page-title">Підрозділи <span>Усі знайдені підрозділи Вашої компанії.</span></h1>
    </section>
    <section class="page-table-wrapper">
        <a href="{{ route("subdivisions.create") }}" class="add-button">
            <img src="{{ asset('img/add_white.svg') }}">Додати підрозділ
        </a>
        <hr/>
        <table class="content-table">
            <thead>
                <tr>
                    <th>Номер підрозділу</th>
                    <th>Назва підрозділу</th>
                    <!-- ещё можно количество сотрудников -->
                    <th>Дії</th>
                </tr>
            </thead>
            <tbody>
            @foreach($subdivisions as $subdivision)
                <tr>
                    <td>{{ $subdivision->subdivisionID }}</td>
                    <td>{{ $subdivision->subdivisionName }}</td>
                    <td class="table-buttons-wrapper">
                        <a href="{{ route("subdivisions.edit", $subdivision->subdivisionID) }}"><button type="submit">Редагувати</button></a>
                        <form method="POST" action="{{ route("subdivisions.destroy", $subdivision->subdivisionID) }}">
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
