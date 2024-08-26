<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <!-- Link to external CSS files -->
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
            padding-top: 80px; /* Adjust this value if the navbar height changes */
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
            background: white; /* Add a background color for visibility */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Optional: add a subtle shadow */
            z-index: 1000; /* Ensure the navbar is above other content */
            background: rgb(255,224,101);
            background: linear-gradient(90deg, rgba(255,224,101,1) 32%, rgba(248,132,60,1) 100%);
        }
        .logo {
            display: flex;
            align-items: center; /* Center logo vertically */
        }

        .logo img {
            width: 50px; /* Adjust size as needed */
            height: auto;
            vertical-align: middle;
            margin-left: 90px; /* Space between logo and menu items */
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
            font-size: 16px; /* Adjust font size if needed */
            transition: color 0.3s ease;
        }
        nav ul li a:hover {
            color: red;
        }
        .home {
            display: flex;
            justify-content: space-between; /* Ensures space between text and image */
            align-items: center;
            height: 100vh;
            background: linear-gradient(90deg, rgba(255,224,101,1) 32%, rgba(248,132,60,1) 100%);
            padding: 0 40px;
        }

        .home-content {
            flex: 1; /* Takes up space on the left side */
            text-align: left; /* Aligns text to the left */
            text-align: justify;
            font-size: 160%;
            margin-left: 40%; /* Adds margin to the right side */
            position: absolute;
            bottom: 20%;
            
            left:0%;
        }

        .images {
            flex: 1; /* Takes up space on the right side */
            display: flex;
            justify-content: flex-end; /* Aligns image to the right */
        }

        .image-logo {
            max-width: 100%;
            height: auto;
            position: absolute;
            bottom: 15%;
            margin-right: 4%;
            right: 55%;
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
    <div class="home-content">
        <div class="text-3" style="margin-right: 20px; max-width: s0%;">
            At San Antonio’s Pride Chicken, we take pride in serving up the juiciest, crispiest fried chicken in town. 
            Our secret? Fresh, high-quality ingredients and a time-tested recipe that’s bursting with flavor. 
            Every piece of chicken is hand-breaded, seasoned to perfection, and fried to a golden, crunchy finish 
            that keeps our customers coming back for more.
            We’re more than just a place to grab a quick bite—we’re a community spot where friends and families 
            gather to enjoy great food and good company. Whether you're craving our signature fried chicken, spicy 
            wings, or a hearty chicken sandwich, we’ve got something to satisfy every appetite.
            Thank you for making San Antonio’s Pride Chicken your go-to for fried chicken. We’re dedicated to 
            providing you with a delicious meal and a welcoming atmosphere every time you visit.
        </div>
    </div>

    <!-- Images -->
    <div class="images">
        <img src="{{ asset('images/logo1.png') }}" alt="logo" class="image-logo">
    </div>
</body>
</html>