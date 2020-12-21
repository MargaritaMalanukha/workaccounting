@extends('layout')

@section('content')

    <section class="page-title-wrapper">
        <h1 class="page-title">Відпустки <span>Редагувати відпустку.</span></h1>
    </section>
    <section class="back-to-previous">
        <a href="{{ route("vacations.index") }}"> Повернутись до усіх відпусток </a>
    </section>
    <section class="create-block">
        <h2>Редагувати</h2>
        <hr/>
        <form method="POST" action="{{ route("vacations.update", $vacation->vacationID) }}">
            @csrf
            @method('PUT')
            <div class="form-block-line">
                <p>Кількість пропущених через хворобу днів</p>
                <input name="vacationDays" value={{ $vacation->vacationDays }}>
            </div>
            <div class="form-block-line">
                <p>Місяць</p>
                <input name="vacationMonth" value={{ $vacation->vacationMonth }}>
            </div>
            <div class="form-block-line">
                <p>Год</p>
                <input name="vacationYear" value={{ $vacation->vacationYear }}>
            </div>
            <div class="form-block-line">
                <p>ID робітника</p>
                <input name="employeeID" value={{ $vacation->employeeID }}>
            </div>
            <div class="form-block-buttons">
                <button type="submit">Save and back</button>
                <a href="{{ route("vacations.index") }}">Cancel</a>
            </div>
        </form>
    </section>

@endsection
