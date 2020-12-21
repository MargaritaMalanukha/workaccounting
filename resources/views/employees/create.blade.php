@extends('layout')

@section('content')

    <section class="page-title-wrapper">
        <h1 class="page-title">Робітники <span>Додати робітника.</span></h1>
    </section>
    <section class="create-wrapper">
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
                    <p>Кількість робочих днів за місяць</p>
                    <input name="employeeWorkingHours">
                </div>
                <div class="form-block-line">
                    <p>Номер підрозділу</p>
                    <input name="subdivisionID">
                </div>
                <div class="form-block-buttons">
                    <button type="submit" class="add-button">Save and back</button>
                    <a href="{{ route("employees.index") }}" class="add-button">Cancel</a>
                </div>
            </form>
        </section>
    </section>


@endsection
