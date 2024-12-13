@extends('layouts.app')

@section('title', 'Sign-up')

@section('content')
<br> <br>
    <div class="flex-grow-1 d-flex align-items-center justify-content-center">
        <div class="container" style="max-width: 50%;">
            <h4 class="h3 mb-3 fw-normal">Please sign up</h4>

            <!-- Вывод ошибок/успешной отправки для формы -->
            @include('inc.notification')

            <form action="{{ route('registered') }}" method="post" class="needs-validation">

                <!--Защита от атак-->
                @csrf

                <div class="row g-3">
                    <div class="col-12">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
                    </div>

                    <div class="col-12">
                        <label for="emailSignUp" class="form-label">Email</label>
                        <input type="email" name="emailSignUp" class="form-control" id="emailSignUp" placeholder="you@example.com">
                    </div>

                    <div class="col-12">
                        <label for="usernameSignUp" class="form-label">Username</label>
                        <input type="text" name="usernameSignUp" class="form-control" id="usernameSignUp" placeholder="Come up with you username">
                    </div>

                    <div class="col-12">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Come up with you password">
                    </div>

                    <div class="col-12">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Repeat password">
                    </div>
                </div>

                <hr class="my-4">

                <button class="w-100 btn btn-primary btn-lg" type="submit">Sign Up</button>
            </form>
        </div>
    </div>
@endsection

