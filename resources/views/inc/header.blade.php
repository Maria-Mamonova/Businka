@section('header')
    <!-- Адаптивная навигационная панель(меню) -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4 fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}"><h2>BUSINKA</h2></a>
            <!-- Гамбургер-меню -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <!-- Меню -->
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>

                <div class="d-flex ms-auto align-items-center">
                    <!-- Поиск -->
                    <form class="d-flex my-auto me-2" role="search">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    </form>

                    <!-- Кнопки регистрации/входа-->
                    <div class="text-end">
                        <button type="button" class="btn btn-outline-light me-1" onclick="window.location.href='{{ route('login') }}'">Login</button>
                        <button type="button" class="btn btn-warning" onclick="window.location.href='{{ route('signup') }}'">Sign-up</button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

