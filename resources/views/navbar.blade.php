<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <!-- Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet">

    <!-- Feather Icons-->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <@yield('nav') {{-- Navbar start --}} <nav class="navbar">
        <img src="/images/tulisSuratIcon.png" alt="tulisSurat">

        <div class="navbar-nav">
            <a href="/#">
                <img src="/images/homeIcon.png">Home</a>
            <a href="/#fitur">
                <img src="/images/fiturIcon.png">
                Fitur</a>
            <a href="/#syarat">
                <img src="/images/syaratIcon.png">
                Syarat</a>
            <a href="#tentang" class="tentangIcon">
                <img src="/images/tentangIcon.png">
                Tentang Kami
            </a>
        </div>
        <div class="navbar-extra">
            <a href="#" id="search"> <i data-feather="search"></i></a>
            <a href="#" id="sun"> <i data-feather="moon"></i></a>
            <a href="#" id="menu"> <i data-feather="menu"></i></a>
        </div>
        </nav>
        {{-- Navbar end --}}


</body>
