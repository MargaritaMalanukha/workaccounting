@extends('layout')

@section('content')

    <section class="page-title-wrapper">
        <h1 class="page-title">Відпустки <span>Додати нову відпустку.</span></h1>
    </section>
    <section class="back-to-previous">
        <a href="{{ route("vacations.index") }}"> Повернутись до усіх відпусток </a>
    </section>
    <section class="create-block">
        <h2>Створити</h2>
        <hr/>
        <form method="POST" action="{{ route("vacations.store") }}">
            @csrf

            <div class="form-block-line">
                <p>Кількість днів, проведених у відпустці</p>
                <input name="vacationDays">
            </div>
            <div class="form-block-line">
                <p>Місяць</p>
                <input name="vacationMonth">
            </div>
            <div class="form-block-line">
                <p>Год</p>
                <input name="vacationYear">
            </div>
            <div class="form-block-line">
                <p>Номер робітника</p>
                <input name="employeeID">
            </div>
            <div class="form-block-buttons">
                <button type="submit">Save and back</button>
                <a href="{{ route("vacations.index") }}">Cancel</a>
            </div>
        </form>
    </section>

@endsection
