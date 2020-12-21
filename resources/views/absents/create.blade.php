@extends('layout')

@section('content')

    <section class="page-title-wrapper">
        <h1 class="page-title">Прогули <span>Додати новий прогул.</span></h1>
    </section>
    <section class="create-wrapper">
        <section class="create-block">
            <h2>Створити</h2>
            <hr/>
            <form method="POST" action="{{ route("absents.store") }}">
                @csrf

                <div class="form-block-line">
                    <p>Кількість прогулів</p>
                    <input name="absentDays">
                </div>
                <div class="form-block-line">
                    <p>Місяць</p>
                    <input name="absentMonth">
                </div>
                <div class="form-block-line">
                    <p>Рік</p>
                    <input name="absentYear">
                </div>
                <div class="form-block-line">
                    <p>Номер робітника</p>
                    <input name="employeeID">
                </div>
                <div class="form-block-buttons">
                    <button type="submit" class="add-button">Save and back</button>
                    <a href="{{ route("absents.index") }}" class="add-button">Cancel</a>
                </div>
            </form>
        </section>
    </section>


@endsection
