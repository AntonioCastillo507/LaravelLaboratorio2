<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <style>
            body {
                font-family: 'Figtree', sans-serif;
                background-color: #f9f6f2;
                margin: 0;
                padding: 0;
            }
            .navbar {
                background-color: transparent;
                padding: 1rem 2rem;
            }
            .navbar .nav-link {
                color: #333;
                font-weight: 600;
            }
            .main-wrapper {
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 90vh;
                padding: 2rem;
            }
            .card-left {
                background: white;
                border-radius: 12px;
                padding: 2.5rem;
                max-width: 420px;
                width: 100%;
                box-shadow: 0 2px 12px rgba(0,0,0,0.08);
            }
            .card-left h2 {
                font-size: 1.1rem;
                font-weight: 700;
                margin-bottom: 0.5rem;
                color: #1a1a1a;
            }
            .card-left p {
                color: #555;
                font-size: 0.9rem;
                margin-bottom: 1.5rem;
            }
            .card-left ul {
                list-style: none;
                padding: 0;
                margin: 0 0 1.5rem 0;
            }
            .card-left ul li {
                margin-bottom: 0.6rem;
            }
            .card-left ul li a {
                color: #f05340;
                text-decoration: none;
                font-size: 0.9rem;
                font-weight: 500;
            }
            .card-left ul li a:hover {
                text-decoration: underline;
            }
            .btn-deploy {
                background-color: #1a1a1a;
                color: white;
                padding: 0.5rem 1.2rem;
                border-radius: 6px;
                text-decoration: none;
                font-size: 0.85rem;
                font-weight: 600;
                display: inline-block;
            }
            .btn-deploy:hover {
                background-color: #333;
                color: white;
            }
            .logo-right {
                margin-left: 3rem;
                flex-shrink: 0;
            }
            .logo-right svg {
                width: 340px;
                height: auto;
            }
            @media (max-width: 768px) {
                .main-wrapper { flex-direction: column; }
                .logo-right { margin-left: 0; margin-top: 2rem; }
                .logo-right svg { width: 200px; }
            }
        </style>
    </head>
    <body>
        {{-- Navbar --}}
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid justify-content-end">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}" class="nav-link me-3">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="nav-link me-3">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </nav>

        {{-- Main Content --}}
        <div class="main-wrapper">
            <div class="card-left">
                <h2>Let's get started</h2>
                <p>Laravel has an incredibly rich ecosystem.<br>We suggest starting with the following.</p>
                <ul>
                    <li>
                        ➤ Read the <a href="https://laravel.com/docs" target="_blank">Documentation ↗</a>
                    </li>
                    <li>
                        ➤ Watch video tutorials at <a href="https://laracasts.com" target="_blank">Laracasts ↗</a>
                    </li>
                </ul>
                <a href="https://cloud.laravel.com" target="_blank" class="btn-deploy">Deploy now</a>
            </div>

<div class="logo-right">
    <img src="https://laravel.com/img/logomark.min.svg" 
         style="width:300px; filter: drop-shadow(2px 4px 6px rgba(0,0,0,0.15));">
</div>
            </div>
        </div>
    </body>
</html>