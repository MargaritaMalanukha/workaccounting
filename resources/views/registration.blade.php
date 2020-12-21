@extends('layout-sign-up-in')

@section('authorize')
    <section class="authorization-page-wrapper">
        <div class="authorization-block" style="min-height: 750px">
            <form action="/register" method="POST">
                @csrf
                <h1>Register</h1>
                <input type="text" name="name" placeholder="Name">
                <input type="text" name="surname" placeholder="Surname">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="password" placeholder="Password">
                <input type="text" name="companyName" placeholder="Company Name">
                <button type="submit" class="button">Sign Up</button>
            </form>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <p>Already registered? <a href="/login">Login to our site!</a></p>
        </div>
    </section>


@endsection
