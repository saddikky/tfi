<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BINUS - TFI Event</title>
    <link rel="icon" href="/images/TFI-Favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">TEACH FOR INDONESIA</a>
            <div class="d-flex align-items-center">
                <span class="me-2">Hello, there</span> <!-- add user's name -->
                <img src="path/to/profile-picture.jpg" alt="Profile Picture" class="profile-pic">
            </div>
        </div>
    </nav>

    <div class="sidebar " tabindex="-1">
        <div style="width: 100%; display: flex; justify-content: center; padding: 20px;">
            <img src="{{ asset('images\LOGO-TFI-PUTIH-FIXED.png') }}" alt="" style="width: 80%;">
        </div>

        <div class="profile-section">
            <img src="your-profile-pic-url" alt="Profile Picture" class="profile-pic">
            <h6 class="user-name">Hello, there</h6>
        </div>
        <div class="nav-section px-3">
            <ul class="navbar-nav flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Dashboard</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Event
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Social Event</a></li>
                    <li><a class="dropdown-item" href="#">Social Activity - CB Course</a></li>
                    <li><a class="dropdown-item" href="#">Social Innovation Project</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Community Service Hours</a>
            </li>
            </ul>
        </div>
        </div>
        
        <div class="content">
            <div class="container">
                @yield('content')
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>