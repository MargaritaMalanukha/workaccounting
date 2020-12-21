@extends('layout')

@section('content')
    <section class="page-title-wrapper">
        <h1 class="page-title">Табелі <span>Автоматично згенеровані табелі для зручного використання сайту.</span></h1>
    </section>
    <section class="timesheet-list">
        <a href="/timesheets/list_of_all_employees" class="list-block" id="first-block">
            <p class="timesheet-numeration">01</p>
            <p class="timesheet-intro"></p>
        </a>
        <a href="/timesheets/list_by_subdivision" class="list-block" id="second-block">
            <p class="timesheet-numeration">02</p>
        </a>
        <a href="/timesheets/absent_list_by_subdivision" class="list-block" id="third-block">
            <p class="timesheet-numeration">03</p>
        </a>
        <a href="/timesheets/list_of_recently_ill" class="list-block" id="fourth-block">
            <p class="timesheet-numeration">04</p>
        </a>
    </section>
@endsection
