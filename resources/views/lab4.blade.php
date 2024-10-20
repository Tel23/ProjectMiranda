<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <title>Lab 1</title>
    <style>
    .hobbiespictures:hover {
    opacity: .4; 
    cursor: pointer;
    color: #fd96a4;
    }

    img.hobbiespictures {
    height: 11cm;
    }

    img.hobbiespictures1 {
    height: 11cm;
    width: 20cm;
    border-radius: 15px
    }
    .subtitle {
    text-align: center;
    color: rgb(76, 75, 75);
    font-size: 20px;
    margin-top: 5px;
    margin-bottom: 30px;
}
.narrative {
    text-align: justify;
    color:  rgb(64, 48, 48);
    font-size: 20px;
    margin-left: 3cm;
    margin-right:3cm ;
    margin-bottom: 35px;
    font-family: 'Times New Roman', Times, serif; 
}
.table4,th,td{
    width: 100%;
    table-layout: fixed;
    text-align: center;
    font-size: 15px;
    border-collapse: collapse;
    margin-left:.2cm;
    margin-right: .2cm;
    margin-bottom: 10px;
}
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            function navigateTo(link) {
                window.location.href = link;
            }

            document.getElementById('profileButton').addEventListener('click', function () {
                navigateTo('{{ url('profile') }}');
            });

            document.getElementById('aboutMeButton').addEventListener('click', function () {
                navigateTo('{{ url('aboutme') }}');
            });

            document.getElementById('personalInfoButton').addEventListener('click', function () {
                navigateTo('{{ url('personal-information') }}');
            });
        });
    </script>
</head>
<body>
<div class="hero">
    <header>
    <section id="about">
        <nav>
            <span>My Project</span>
            <ul>
                <li><a href="{{ url('/') }}">HOME</a></li>
                <li><a href="{{ url('/aboutme') }}">ABOUT ME</a></li>
                <li><a href="{{ url('/content') }}">CONTENT</a></li>
                <li><a href="{{ url('/contact') }}">CONTACT </a></li>
            </ul>
        </nav>
    </section>
    </header>

    <main>
        <h1 style="text-align: center; color: rgb(181, 99, 117); font-size: 40px; margin-top: 3cm; margin-bottom: 15px;">LAB 4: MIDDLEWARE</h1>
        <h2 class="subtitle">~ Task: Create and Register New Middleware, and Uploading to GitHub ~</h2>

        <table class="table4">
            <tr>
                <th><a href="{{ url('contactus') }}" target="_blank"><img class="hobbiespictures1" src="{{ asset('images/lab4.jpg') }}" alt="Single" width="300" height="300"></th>
            </tr>
        </table>
        <div class="narrative">
        <p> This project focuses on developing custom middleware in a Laravel application, specifically the CheckAge and LogRequests classes. The CheckAge middleware ensures that users
            are 18 or older, redirecting those who don't meet the requirement to an "Access Denied" page, while the LogRequests middleware logs all HTTP request details to a log.txt file. 
            Both middleware were assigned to specific routes to enhance application security and functionality. However, I encountered several challenges, including configuring the middleware 
            to execute in the correct order, which initially led to unexpected behaviors. Additionally, managing the logging functionality proved difficult, as I had to ensure the log.txt file 
            was created with the right permissions and that the logging did not negatively impact application performance. Debugging these issues required careful testing and adjustments, ultimately 
            deepening my understanding of middleware and its role in enhancing security and monitoring in Laravel applications.</p>
</div>
    </main>
    </div>
</body>
</html>
