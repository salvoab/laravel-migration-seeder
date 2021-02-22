<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Students | @yield('title')</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-sm navbar-light bg-light">
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('students.index') }}">Students</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('classrooms.index') }}">Classrooms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('courses.index') }}">Courses</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main class="container">
            @yield('content')
        </main>

        <footer></footer>
    </body>
</html>
