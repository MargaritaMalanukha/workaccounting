@extends('layout')

@section('content')

    <section class="page-title-wrapper">
        <h1 class="page-title">Робітники <span>Додати нового робітника.</span></h1>
    </section>
    <section class="back-to-previous">
        <a href="{{ route("employees.index") }}"> Повернутись до усіх робітників </a>
    </section>
    <section class="create-block">
        <h2>Створити</h2>
        <hr/>
        <form method="POST" action="{{ route("employees.store") }}">
            @csrf
            <div class="form-block-line">
                <p>Особисті дані</p>
                <input name="employeeData">
            </div>
            <div class="form-block-line">
                <p>Номер підрозділу</p>
                <input name="subdivisionID">
            </div>
            <div class="form-block-buttons">
                <button type="submit">Save and back</button>
                <a href="{{ route("employees.index") }}">Cancel</a>
            </div>
        </form>
    </section>

@endsection
