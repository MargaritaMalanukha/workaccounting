@extends('layout')

@section('content')

    <section class="page-title-wrapper">
        <h1 class="page-title">Робітники <span>Редагувати запис робітника.</span></h1>
    </section>
    <section class="create-wrapper">
        <section class="create-block">
            <h2>Редагувати</h2>
            <hr/>
            <form method="POST" action="{{ route("employees.update", $employee->employeeID) }}">
                @csrf
                @method('PUT')
                <div class="form-block-line">
                    <p>Особисті дані</p>
                    <input name="employeeData" value="{{ $employee->employeeData }}">
                </div>
                <div class="form-block-line">
                    <p>Кількість робочих днів</p>
                    <input name="employeeWorkingDays" value="{{ $employee->employeeWorkingDays }}">
                </div>
                <div class="form-block-line">
                    <p>Номер підрозділу</p>
                    <input name="subdivisionID" value="{{ $employee->subdivisionID }}">
                </div>
                <div class="form-block-buttons">
                    <button type="submit" class="add-button">Save and back</button>
                    <a href="{{ route("employees.index") }}" class="add-button">Cancel</a>
                </div>
            </form>
        </section>
    </section>


@endsection
