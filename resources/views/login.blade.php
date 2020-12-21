@extends('layout-sign-up-in')

@section('authorize')

    <section class="authorization-page-wrapper">
        <div class="authorization-block">
            <form action="/login" method="POST">
                @csrf
                <h1>Login</h1>
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="password" placeholder="Password">
                <button type="submit" class="button">Sign In</button>
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

            <p>New? <a href="/register">Sign Up to our site!</a></p>
        </div>
    </section>


@endsection
