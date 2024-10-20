 <!-- resources/views/Components/layout.blade.php -->
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@latest/css/boxicons.min.css'>

</head>
<body>
    <!-- Header -->
    @unless (Request::is('/'))
    <header>
    <nav>
            @php
                $roleGreeting = $role === 'professor' ? 'Prof' : '';
            @endphp
            <span class="logo-text">Hi, {{ $roleGreeting }} {{ $username }} welcome to My Portfolio!</span>
            <ul>
                <li><a href="{{ url('/home') }}">HOME</a></li>
                <li><a href="{{ url('/aboutme') }}">ABOUT ME</a></li>
                <li><a href="{{ url('/content') }}">CONTENT</a></li>
                <li><a href="{{ url('/contact') }}">CONTACT</a></li>
            </ul>
        </nav>
    </header>
    <!-- End Header -->
    @endunless

    <!-- Main Content Section -->
    <main>
        @yield('content')
    </main>

    @unless (Request::is('/'))
    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Kristelle Anne Miranda. All rights reserved.</p>
            <p>Follow me on <a href="https://www.facebook.com/kristelleanne.miranda?mibextid=ZbWKwL">Facebook</a> and <a href="https://www.instagram.com/kristelle_023">Instagram</a>.</p>
        </div>
    </footer>
    @endunless
</body>
</html>