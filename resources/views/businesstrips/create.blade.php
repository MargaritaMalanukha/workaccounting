@extends('layout')

@section('content')

    <section class="page-title-wrapper">
        <h1 class="page-title">Відрядження <span>Додати нове відрядження.</span></h1>
    </section>
    <section class="create-wrapper">
        <section class="create-block">
            <h2>Створити</h2>
            <hr/>
            <form method="POST" action="{{ route("businesstrips.store") }}">
                @csrf

                <div class="form-block-line">
                    <p>Кількість днів у відрядженні</p>
                    <input name="businessTripDays">
                </div>
                <div class="form-block-line">
                    <p>Місяць</p>
                    <input name="businessTripMonth">
                </div>
                <div class="form-block-line">
                    <p>Год</p>
                    <input name="businessTripYear">
                </div>
                <div class="form-block-line">
                    <p>ID робітника</p>
                    <input name="employeeID">
                </div>
                <div class="form-block-buttons">
                    <button type="submit" class="add-button">Save and back</button>
                    <a href="{{ route("businesstrips.index") }}" class="add-button">Cancel</a>
                </div>
            </form>
        </section>
    </section>

@endsection
