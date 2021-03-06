@extends('layout')

@section('content')

    <section class="page-title-wrapper">
        <h1 class="page-title">Лікарняні <span>Додати новий лікарняний.</span></h1>
    </section>
    <section class="create-wrapper">
        <section class="create-block">
        <h2>Створити</h2>
        <hr/>
        <form method="POST" action="{{ route("hospitals.store") }}">
            @csrf

            <div class="form-block-line">
                <p>Кількість пропущених через хворобу днів</p>
                <input name="hospitalDays">
            </div>
            <div class="form-block-line">
                <p>Місяць</p>
                <input name="hospitalMonth">
            </div>
            <div class="form-block-line">
                <p>Рік</p>
                <input name="hospitalYear">
            </div>
            <div class="form-block-line">
                <p>Прізвище робітника</p>
                <input name="employeeSurname">
            </div>
            <div class="form-block-buttons">
                <button type="submit" class="add-button">Save and back</button>
                <a href="{{ route("hospitals.index") }}" class="add-button">Cancel</a>
            </div>
        </form>
    </section>
    </section>

@endsection
