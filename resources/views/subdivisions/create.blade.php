@extends('layout')

@section('content')

    <section class="page-title-wrapper">
        <h1 class="page-title">Підрозділи <span>Створити підрозділ.</span></h1>
    </section>
    <section class="back-to-previous">
        <a href="{{ route("subdivisions.index") }}"> Повернутись до усіх підрозділів </a>
    </section>
    <section class="create-block">
        <h2>Створити</h2>
        <hr/>
        <form method="POST" action="{{ route("subdivisions.store") }}">
            @csrf
            <div class="form-block-line">
                <p>Назва підрозділу</p>
                <input name="title">
            </div>
            <div class="form-block-buttons">
                <button type="submit">Save and back</button>
                <a href="{{ route("subdivisions.index") }}">Cancel</a>
            </div>
        </form>
    </section>

@endsection
