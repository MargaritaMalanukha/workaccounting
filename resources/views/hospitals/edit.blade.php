@extends('layout')

@section('content')

    <section class="page-title-wrapper">
        <h1 class="page-title">Робітники <span>Редагувати лікарняний.</span></h1>
    </section>
    <section class="create-wrapper">
        <section class="create-block">
            <h2>Редагувати</h2>
            <hr/>
            <form method="POST" action="{{ route("hospitals.update", $hospital->hospitalID) }}">
                @csrf
                @method('PUT')
                <div class="form-block-line">
                    <p>Кількість пропущених через хворобу днів</p>
                    <input name="hospitalDays" value={{ $hospital->hospitalDays }}>
                </div>
                <div class="form-block-line">
                    <p>Місяць</p>
                    <input name="hospitalMonth" value={{ $hospital->hospitalMonth }}>
                </div>
                <div class="form-block-line">
                    <p>Год</p>
                    <input name="hospitalYear" value={{ $hospital->hospitalYear }}>
                </div>
                <div class="form-block-line">
                    <p>Фамілія робітника</p>
                    <input name="employeeSurname" value={{ $employee->employeeData }}>
                </div>
                <div class="form-block-buttons">
                    <button type="submit" class="add-button">Save and back</button>
                    <a href="{{ route("hospitals.index") }}" class="add-button">Cancel</a>
                </div>
            </form>
        </section>
    </section>


@endsection
