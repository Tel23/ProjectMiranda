<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
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
        <h1 style="text-align: center; color: rgb(181, 99, 117); font-size: 40px; margin-top: 3cm; margin-bottom: 15px;">LAB 1: SETUP</h1>
        <h2 class="subtitle">~ Task: Setting Up Laravel, Creating 3 Views, and Uploading to GitHub ~</h2>

        <table class="table4">
            <tr>
                <th><a href="{{ url('contactus') }}" target="_blank"><img class="hobbiespictures1" src="{{ asset('images/lab1.jpg') }}" alt="Single" width="300" height="300"></th>
            </tr>
        </table>
        <div class="narrative">
        <p> In this project, I faced challenges during the installation process, encountering multiple errors that tested my patience, 
            but through persistence and research, I overcame them. This project demonstrated the process of creating views in a Laravel application, 
            which involved everything from installing Laravel and configuring the database connection to building and styling three key pages: 
            a homepage, an about page, and a content page, all with defined routes for seamless navigation. Also, uploading my project to GitHub posed 
            another challenge as I was new to the platform, but after hours of learning, I successfully committed and pushed my work. Ultimately, these 
            difficulties provided valuable learning experiences, boosting my confidence in web development and teaching me the importance of perseverance.
</p>
</div>
    </main>
    </div>
</body>
</html>
