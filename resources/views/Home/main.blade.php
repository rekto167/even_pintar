<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- Bootstrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    {{-- Styling additional --}}
    <style>
        .jumbotron{
            background-image: url('{{ asset('img/dummy/event.jpg') }}');
            background-size: cover;
            color: white;
        }
    </style>


    <title>@yield('title')</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a href="/home" class="navbar-brand">Platform Events</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-toggle="#navbarSupportContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
        </form>
        <div class="collapse navbar-collapse ml-auto d-flex" id="navbarSupportContent">
            <ul class="navbar-nav ms-auto mr-3">
                <li class="nav-item"><a href="/home" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="/create_event" class="nav-link">Create Event</a></li>
                <li class="nav-item"><a href="/events" class="nav-link">Events</a></li>
            </ul>
            @if(Auth::check())
                <a href="{{ route('logout') }}" class="btn"><i class="bi bi-box-arrow-right" style="font-size:25px;"></i></a>
                <div class="btn-group dropstart">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu">
                        <!-- Dropdown menu links -->
                        <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i>Setting Profile</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i>Setting</a></li>
                    </ul>
                </div>
            @else
                <a href="{{ route('login') }}" class="btn"><i class="bi bi-box-arrow-left" style="font-size:25px;"></i></a>
                <ul class="navbar-nav">
                    <li>Guest</li>
                </ul>
            @endif
        </div>
    </div>
</nav>

@yield('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
</body>
</html>
