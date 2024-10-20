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
        <h1 style="text-align: center; color: rgb(181, 99, 117); font-size: 40px; margin-top: 3cm; margin-bottom: 15px;">LAB 3: LAYOUT</h1>
        <h2 class="subtitle">~ Task: Creating a Layout File, Creating Views, Updating Routes, and Uploading to GitHub ~</h2>

        <table class="table4">
            <tr>
                <th><a href="{{ url('contactus') }}" target="_blank"><img class="hobbiespictures1" src="{{ asset('images/lab3.jpg') }}" alt="Single" width="300" height="300"></th>
            </tr>
        </table>
        <div class="narrative">
        <p> This project focuses on creating a reusable layout in Laravel using Blade templates. A Layout.blade.php file was developed in the Components folder to define the basic 
            HTML structure, ensuring a consistent look across multiple views. Each view extended this layout, injecting unique, page-specific content. Routes in routes/web.php were 
            updated to display these views, allowing seamless navigation. However, I encountered difficulties with Blade's section management, particularly when trying to correctly 
            yield content in the right places. Debugging these layout issues required revisiting the documentation and testing different approaches. Additionally, ensuring the routes 
            matched the correct views while maintaining a clean structure was another challenge. Overcoming these difficulties helped improve my understanding of Blade's templating
            system and Laravel's routing.</p>
</div>
    </main>
    </div>
</body>
</html>
