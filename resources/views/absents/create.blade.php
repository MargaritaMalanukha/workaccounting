@extends('layout')

@section('content')

    <section class="page-title-wrapper">
        <h1 class="page-title">Прогули <span>Додати новий прогул.</span></h1>
    </section>
    <section class="back-to-previous">
        <a href="{{ route("absents.index") }}"> Повернутись до усіх прогулів </a>
    </section>
    <section class="create-block">
        <h2>Створити</h2>
        <hr/>
        <form method="POST" action="{{ route("absents.store") }}">
            @csrf

            <div class="form-block-line">
                <p>Кількість днів, пропущених без поважної причини</p>
                <input name="absentDays">
            </div>
            <div class="form-block-line">
                <p>Місяць</p>
                <input name="absentMonth">
            </div>
            <div class="form-block-line">
                <p>Год</p>
                <input name="absentYear">
            </div>
            <div class="form-block-line">
                <p>Номер робітника</p>
                <input name="employeeID">
            </div>
            <div class="form-block-buttons">
                <button type="submit">Save and back</button>
                <a href="{{ route("absents.index") }}">Cancel</a>
            </div>
        </form>
    </section>

@endsection
