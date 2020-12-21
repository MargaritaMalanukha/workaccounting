@extends('layout')

@section('content')

    <section class="page-title-wrapper">
        <h1 class="page-title">Відрядження <span>Редагувати відрядження.</span></h1>
    </section>
    <section class="create-wrapper">
        <section class="create-block">
            <h2>Редагувати</h2>
            <hr/>
            <form method="POST" action="{{ route("businesstrips.update", $trip->businessTripID) }}">
                @csrf
                @method('PUT')
                <div class="form-block-line">
                    <p>Кількість днів у відрядженні</p>
                    <input name="businessTripDays" value={{ $trip->businessTripDays }}>
                </div>
                <div class="form-block-line">
                    <p>Місяць</p>
                    <input name="businessTripMonth" value={{ $trip->businessTripMonth }}>
                </div>
                <div class="form-block-line">
                    <p>Год</p>
                    <input name="businessTripYear" value={{ $trip->businessTripYear }}>
                </div>
                <div class="form-block-line">
                    <p>ID робітника</p>
                    <input name="employeeID" value={{ $trip->employeeID }}>
                </div>
                <div class="form-block-buttons">
                    <button type="submit" class="add-button">Save and back</button>
                    <a href="{{ route("businesstrips.index") }}" class="add-button">Cancel</a>
                </div>
            </form>
        </section>
    </section>


@endsection
