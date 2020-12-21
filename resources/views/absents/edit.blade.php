@extends('layout')

@section('content')

    <section class="page-title-wrapper">
        <h1 class="page-title">Прогули <span>Редагувати прогули.</span></h1>
    </section>
    <section class="back-to-previous">
        <a href="{{ route("absents.index") }}"> Повернутись до усіх прогулів </a>
    </section>
    <section class="create-block">
        <h2>Редагувати</h2>
        <hr/>
        <form method="POST" action="{{ route("absents.update", $absent->absentID) }}">
            @csrf
            @method('PUT')
            <div class="form-block-line">
                <p>Кількість днів, пропущених без поважної причини</p>
                <input name="absentDays" value={{ $absent->absentDays }}>
            </div>
            <div class="form-block-line">
                <p>Місяць</p>
                <input name="absentMonth" value={{ $absent->absentMonth }}>
            </div>
            <div class="form-block-line">
                <p>Год</p>
                <input name="absentYear" value={{ $absent->absentYear }}>
            </div>
            <div class="form-block-line">
                <p>ID робітника</p>
                <input name="employeeID" value={{ $absent->employeeID }}>
            </div>
            <div class="form-block-buttons">
                <button type="submit">Save and back</button>
                <a href="{{ route("absents.index") }}">Cancel</a>
            </div>
        </form>
    </section>

@endsection
