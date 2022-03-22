<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('portfolio/css/dashboard.css') }}">

</head>

<body>

    <div class="wrapper">
        <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    <a href="#">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
            </div>

        </div>
        <div class="sidebar">
            <div class="profile">
                <img src="{{ Storage::url(Auth::user()->profile->photo) }}" alt="profile_picture">
                <h3>{{ Auth::user()->name }}</h3>
            </div>
            <ul>
                <li>
                    <a href="/" class="active">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="/admin.create_profile">
                        <span class="icon"><i class="fas fa-user"></i></span>
                        <span class="item">profile</span>
                    </a>
                </li>
                <li>
                    <a href="/admin.create_award">
                        <span class="icon"><i class="fas fa-award"></i></span>
                        <span class="item">Certification</span>
                    </a>
                </li>
                <li>
                    <a href="/admin.create_education">
                        <span class="icon"><i class="fas fa-graduation-cap"></i></span>
                        <span class="item">education</span>
                    </a>
                </li>
                <li>
                    <a href="/admin.create_experience">
                        <span class="icon"><i class="fas fa-history"></i></span>
                        <span class="item">experience</span>
                    </a>
                </li>
                <li>
                    <a href="/admin.create_interest">
                        <span class="icon"><i class="fas fa-magic"></i></span>
                        <span class="item">interest</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-brain"></i></span>
                        <span class="item">skills</span>
                    </a>
                </li>
                <li>
                    <a href="/admin.create_project">
                        <span class="icon"><i class="fas fa-laptop"></i></span>
                        <span class="item">projects</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                    <span class="item">logout</span>
                    </a>



                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        
                    </form>
                </li>
            </ul>
        </div>



        @yield('content')
    </div>

    <script>
        var hamburger = document.querySelector(".hamburger");
        hamburger.addEventListener("click", function() {
            document.querySelector("body").classList.toggle("active");
        })
    </script>

</body>

</html>
