@extends('layout')

@section('content')
    <section class="page-title-wrapper">
        <h1 class="page-title">Табелі <span>Автоматично згенеровані табелі для зручного використання сайту.</span></h1>
    </section>
    <section class="timesheet-list">
        <a href="/timesheets/list_of_all_employees" class="list-block" id="first-block">
            <p class="timesheet-numeration">01</p>
            <div class="timesheet-intro">Повний табель</div>
      <!--      <div class="timesheet-text">Табель, що ведеться для обліку
                <br/> відпрацьованого часу. Він містить <br/> усі дані о відвідуваності
                <br/> робітників підприємства.
            </div>-->
        </a>
        <a href="/timesheets/list_by_subdivision/1" class="list-block" id="second-block">
            <p class="timesheet-numeration">02</p>
            <div class="timesheet-intro" id="timesheet-intro-2">Табель по підрозділам</div>
            <div class="timesheet-text"></div>
        </a>
        <a href="/timesheets/absent_list_by_subdivision/1" class="list-block" id="third-block">
            <p class="timesheet-numeration">03</p>
            <div class="timesheet-intro" id="timesheet-intro-3">Табель прогулів</div>
            <div class="timesheet-text"></div>
        </a>
        <a href="/timesheets/list_of_recently_ill" class="list-block" id="fourth-block">
            <p class="timesheet-numeration">04</p>
            <div class="timesheet-intro" id="timesheet-intro-4">Табель лікарняних</div>
            <div class="timesheet-text"></div>
        </a>
    </section>
@endsection
