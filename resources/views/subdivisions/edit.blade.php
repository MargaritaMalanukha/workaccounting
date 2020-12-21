@extends('layout')

@section('content')

    <section class="page-title-wrapper">
        <h1 class="page-title">Підрозділи <span>Редагувати підрозділ.</span></h1>
    </section>
    <section class="back-to-previous">
        <a href="{{ route("subdivisions.index") }}"> Back to all subdivisions </a>
    </section>
    <section class="create-block">
        <h2>Редагувати</h2>
        <hr/>
        <form method="POST" action="{{ route("subdivisions.update", $subdivision->subdivisionID) }}">
            @csrf
            @method('PUT')
            <div class="form-block-line">
                <p>Назва підрозділу</p>
                <input name="title" value="{{ $subdivision->subdivisionName }}">
            </div>
            <div class="form-block-buttons">
                <button type="submit">Save and back</button>
                <a href="{{ route("subdivisions.index") }}">Cancel</a>
            </div>
        </form>
    </section>

@endsection
