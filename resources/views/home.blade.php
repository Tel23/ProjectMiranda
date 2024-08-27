<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap');
        * {
            margin: 0;
            padding: 0;
            font-family: 'Ubuntu', sans-serif;
            box-sizing: border-box;
        }
        body {
            padding-top: 80px; 
        }
        nav {
            display: flex;
            width: 100%;
            padding: 20px 0;
            align-items: center;
            justify-content: space-between;
            position: fixed;
            top: 0;
            left: 0;
            background: white; 
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
            z-index: 1000; 
            background: rgb(255,224,101);
            background: linear-gradient(90deg, rgba(255,224,101,1) 32%, rgba(248,132,60,1) 100%);
        }
        .logo {
            display: flex;
            align-items: center; 
        }

        .logo img {
            width: 50px; 
            height: auto;
            vertical-align: middle;
            margin-left: 90px; 
        }
        nav ul {
            list-style: none;
            display: flex;
        }
        nav ul li {
            margin: 0 20px;
        }
        nav ul li a {
            text-decoration: none;
            color: black;
            font-weight: bold;
            font-size: 16px; 
            transition: color 0.3s ease;
        }
        nav ul li a:hover {
            color: red;
        }
        .home {
        height: calc(100vh - 80px); 
        color: #fff;
        min-height: 500px;
        font-family: 'Ubuntu', sans-serif;
        display: flex;
        justify-content: flex-start; 
        align-items: center; 
        text-align: left; 
        background: rgb(255,224,101);
        background: linear-gradient(90deg, rgba(255,224,101,1) 32%, rgba(248,132,60,1) 100%);
    }

        .home .max-width {
            margin: 0; /* Center text within the container */
        }

        .home .home-content {
            max-width: 100%; 
            margin-left: 20px;
            position: absolute;
            bottom: 45%;
        }

        .home .home-content .text-1 {
            font-size: 50px;
            margin:-4%;
            margin-left: 1%;
            color: black;
        }

        .home .home-content .text-2 {
            font-size: 85px;
            font-weight: 600;
            color: brown;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.7); 
            margin: 0;
        }

        .home .home-content .text-3 {
            font-size: 20px;
            margin:0;
        }

        .home .home-content .text-3 span {
            color: crimson;
            font-weight: 500;
        }

        .home-sci {
            position: absolute;
            top: 60%;
            left: 120px;
            display: flex;
            align-items: center;
        }
        .home-sci a {
            display: flex; 
            align-items: center;
            width: 60px;
            height: 60px;
            background: transparent;
            border-radius: 50%;
            font-size: 40px;
            color: cyan;
            text-decoration: none;
            margin-right: 15px;
        }
        .home-sci a:hover {
            color: black;
        }
        .btn-box {
            display: inline-block;
            padding: 12px 28px;
            border-radius: 40px;
            font-size: 16px;
            color: rgb(0, 0, 0);
            background: rgb(87, 155, 218);
            letter-spacing: 1px;
            text-decoration: none;
            font-weight: bold;
            position: absolute;
            top: 75%;
            left: 120px;
            display: flex;
            align-items: center;
            transform: translateY(-50%);
        }
        .btn-box:hover {
            box-shadow: 0 0 5px cyan;
        }
        .images {
            width: 45%;
            height: 70%;
            position: absolute;
            bottom: 0;
            right: 100px;
        }
        .image-chick, .image-fried {
            position: absolute;
            height: auto;
            object-fit: contain;
        }
        .image-chick {
            width: 60%;
            z-index: 2;
            height: 120%;
            left: 5%;
            position: absolute;
            top: -10%;
            bottom: 20%;
        }
        .image-fried {
            position: absolute;
            top:40 %;
            bottom: 5%;
            left: 7%;
            width: 110%;
            max-width: 160%;
            max-height: 200%;
            border-radius: 50%; 
            border: 5px solid var(--blue1-light);
            padding: 0;
            object-fit: cover;}
        @media screen and (max-width: 768px) {
            .images {
                width: 80%;
            }
            .image-fried, .image-chick {
                width: 80%;
            }
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/logo.jpg') }}" alt="Logo">
            </a>
        </div>
        <ul>
            <li><a href="{{ url('/') }}"><i class="fas fa-home"></i> HOME</a></li>
            <li><a href="{{ url('about') }}"><i class="fas fa-info-circle"></i> ABOUT</a></li>
            <li><a href="{{ url('content') }}"><i class="fas fa-file-alt"></i> CONTENT</a></li>
        </ul>
    </nav>

    <!-- Home Section -->
    <div class="home" id="home">
        <div class="home-content">
            <div class="text-1">San Antonio's</div>
            <div class="text-2">PRIDE CHICKEN</div>
            <div class="text-3">Take pride in <span>every bite</span></div>
        </div>
    </div>

    <!-- Social Media Links -->
    <div class="home-sci">
        <a href="https://www.facebook.com/profile.php?id=100089792895947"><i class='bx bxl-facebook-circle'></i></a>
        <a href="https://www.instagram.com/kristelle_023"><i class='bx bxl-instagram'></i></a>
        <a href="mailto:SanAntonioPrideChicken@gmail.com"><i class='bx bx-envelope'></i></a>
    </div>

    <!-- Images -->
    <div class="images">
        <img src="{{ asset('images/chick1.png') }}" alt="chick1" class="image-chick">
        <img src="{{ asset('images/fried1.png') }}" alt="fried1" class="image-fried">
    </div>

    <!-- "More About Me" Button -->
    <a href="{{ url('/about') }}" class="btn-box"> See More </a>
</body>
</html>
