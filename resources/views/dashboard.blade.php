@extends('layout')

@section('content')

    <section class="dashboard-main">
        {{ session('data')['companyId'] }}
    </section>

@endsection
