<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content</title>
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
            display: flex;
            justify-content: space-between; 
            align-items: center;
            height: 100vh;
            background: linear-gradient(90deg, rgba(255,224,101,1) 32%, rgba(248,132,60,1) 100%);
            padding: 0 40px;
        }

        .description {
            margin-bottom: 20px;
            font-size: 20px;
            color: #333;
            text-align: center; 
            position: absolute;
            top: 17%;
            margin-right: 5%;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            position: absolute;
            top: 35%;
            margin-right: 5%;
        }

        .gallery-item {
            flex: 1;
            min-width: 200px;
            text-align: center;
            font size: 15%;
        }

        .gallery-item img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .gallery-item img:hover {
            transform: scale(1.05);
        }

        .gallery-item p {
            margin-top: 10px;
            font-size: 20px;
            color: #333;
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

    <div class="home" id="home">
    <div class="description">
    Explore our delicious offerings! From our signature fried chicken 
    to savory lumpia, liempo and more, there's something for everyone. 
    Each dish is made fresh to order, using only the highest quality ingredients.
    Check out our full menu below and find your next favorite meal:

            </div>
            <div class="gallery">
                <div class="gallery-item">
                    <img src="{{ asset('images/fried.jpg') }}" alt="Fried">
                    <p>Fried Chicken: Hand-breaded, crispy, and juicy.</p>
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('images/neck.png') }}" alt="Neck">
                    <p>Fried Chicken Neck: Crispy and flavorful, a perfect snack or side.</p>
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('images/lumpia.jpg') }}" alt="Lumpia">
                    <p>Lumpia: Crispy rolls filled with a savory mix, fried to perfection.</p>
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('images/liempo.png') }}" alt="Liempo">
                    <p>Liempo:  fried pork belly, seasoned to perfection.</p>
                </div>
            </div>

    </div>
    </div>
</body>
</html>