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
        <h1 style="text-align: center; color: rgb(181, 99, 117); font-size: 40px; margin-top: 3cm; margin-bottom: 15px;">LAB 2: ROUTES</h1>
        <h2 class="subtitle">~ Task: Defining Basic Routes, Using Route Parameters, and Uploading to GitHub ~</h2>

        <table class="table4">
            <tr>
                <th><a href="{{ url('contactus') }}" target="_blank"><img class="hobbiespictures1" src="{{ asset('images/lab2.jpg') }}" alt="Single" width="300" height="300"></th>
            </tr>
        </table>
        <div class="narrative">
        <p> This project showcases the use of route parameters in Laravel to create dynamic user experiences, accepting a username to display messages like "Welcome, johndoe!" 
            for /user/johndoe and a default "Welcome, Guest!" for the optional /user route. Regular expression constraints were applied to ensure usernames only contain alphabetic 
            characters (a-z, A-Z), enhancing security. However, challenges arose with correctly implementing these constraints, leading to initial routing errors. Testing both valid 
            and invalid usernames further complicated the process, but overcoming these issues improved my understanding of Laravel's routing system and strengthened my problem-solving skills.</p>
</div>
    </main>
    </div>
</body>
</html>
