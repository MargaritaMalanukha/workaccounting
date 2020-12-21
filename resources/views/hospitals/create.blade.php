@extends('layout')

@section('content')

    <section class="page-title-wrapper">
        <h1 class="page-title">Лікарняні <span>Додати новий лікарняний.</span></h1>
    </section>
    <section class="back-to-previous">
        <a href="{{ route("hospitals.index") }}"> Повернутись до усіх лікарняних </a>
    </section>
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
                <p>Год</p>
                <input name="hospitalYear">
            </div>
            <div class="form-block-line">
                <p>Номер робітника</p>
                <input name="employeeID">
            </div>
            <div class="form-block-buttons">
                <button type="submit">Save and back</button>
                <a href="{{ route("hospitals.index") }}">Cancel</a>
            </div>
        </form>
    </section>

@endsection
