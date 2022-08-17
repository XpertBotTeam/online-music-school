

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    {{--<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet"> --}}
    <link rel="stylesheet" href="/bootstrap.css">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <title>Aoudak rannan</title>
</head>
<body data-spy="scroll" data-target="#navbarResponsive">
        <!-- start home section -->
    <div id="home">
        <!-- navigation bar starts -->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <div class="logo">
                <i class="fa-solid fa-music"></i>
                <a href="#" class="navbar-brand"> Aoudak rannan</a>
            </div>

            <button class="navbar-toggler" data-toggle="collapse" type="button" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#course" class="nav-link">Course</a></li>
                    <li class="nav-item"><a href="#features" class="nav-link">Features</a></li>
                    <li class="nav-item"><a href="#resources" class="nav-link">Resources</a></li>

                    @auth
                        <span class="nav-link">Welcome {{ auth()->user()->first_name }} !</span>
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="nav-link"> Logout</button>
                        </form>
                    @else
                        <button><a href="/login" class="nav-link">login</a></button>
                        <button><a href="/register" class="nav-link">Register Now</a></button>
                    @endauth


                </ul>
            </div>
        </nav>
    </div>

    <div class="landing">
        <div class="home-wrap">
            <div class="home-inner w-100">
            </div>
        </div>
    </div>
    <div class="caption text-center">
        <h1>Welcome to Aoudak Rannan </h1>
        <h3>A.R is a great platform to learn music from scratch</h3>
        <a class="btn btn-outline-light btn-lg" href="/register">Get started</a>
    </div>



    <footer>
        <div class="row justify-content-center">
            <div class="col-md-5 text-center ">
                <strong>Contact info</strong>
                <p>+96171401080<br>omarelhajjjobs@gmail.com </p>
                <a href="#"> <i class="fab fa-facebook-square"></i></a>
                <a href="#"> <i class="fab fa-twitter-square"></i></a>
                <a href="#"> <i class="fab fa-instagram"></i></a>
            </div>
            <hr class="socket">
            &copy; Aoudak rannan team.
        </div>
    </footer>

    <x-flash />

</body>


</html>



