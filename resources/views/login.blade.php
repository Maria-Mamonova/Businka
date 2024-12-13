@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="flex-grow-1 d-flex align-items-center justify-content-center">
        <div class="container" style="max-width: 30%;">
            <main class="form-signin w-100 m-auto">

                <form class="needs-validation">

                    <!--Защита от CSRF-->
                    @csrf

                    <h4 class="h3 mb-3 fw-normal">Please sign in</h4>

                    <div class="form-floating">
                        <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                        <label for="username">Username</label>
                    </div>

                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        <label for="password">Password</label>
                    </div>

                    <div class="form-check text-start my-3">
                        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Remember me
                        </label>
                    </div>
                    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
                </form>
            </main>
        </div>
    </div>
@endsection
