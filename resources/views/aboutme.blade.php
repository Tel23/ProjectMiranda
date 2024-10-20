<!-- resources/views/username.blade.php -->
@extends('Components.Layout') <!-- This extends your Layout.blade.php -->
@section('title', 'Username - About Me') <!-- This sets the title section -->

@section('content') <!-- This defines the content section -->   
    <!-- About Me Section -->
     <div class= "hero">
     <div class="logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/3.png') }}" alt="my image">
            </a>
        </div>
        <div class="about-text">
                <h1>About Me</h1>

                <div class="about-content">

                    <div class="text-content">
                        <p>Hello! I'm Kristelle Anne Miranda, a passionate and dedicated BSIT student. My journey in the field of Information Technology has been an exciting and educational experience. I thrive in environments that challenge me to grow and improve both my technical and creative skills.</p>
                        
                        <p>Through my studies, I’ve developed a solid foundation in web development, software engineering, and digital design. I’m always eager to learn new technologies and improve my existing skills to keep pace with the fast-evolving tech industry.</p>
                        
                        <p>In addition to my technical knowledge, I enjoy engaging in creative projects that allow me to express myself through design, whether it’s through illustrations or building user-friendly interfaces. My goal is to create meaningful projects that combine form and function seamlessly.</p>
                        
                        <p>Feel free to explore more about my work, education, and projects throughout this portfolio. Let’s connect and create something amazing together!</p>

                        <a href="{{ url('/content') }}" class="btn-box">View My Projects</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection