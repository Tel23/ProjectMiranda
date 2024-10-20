<!-- resources/views/username.blade.php -->
@extends('Components.Layout') <!-- This extends your Layout.blade.php -->
@section('title', 'Username - Home') <!-- This sets the title section -->

@section('content') <!-- This defines the content section -->  
<div class="hero"> 
    <!-- Home Section -->
    <div class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hi, I am</div>
                <div class="text-2">Kristelle Anne Miranda</div>
                <div class="text-3">And I'm a <span>BSIT student</span></div>
            </div>
        </div>
    </div>

    <!-- Social Media Links -->
    <div class="home-sci">
        <a href="https://www.facebook.com/kristelleanne.miranda?mibextid=ZbWKwL"><i class='bx bxl-facebook-circle'></i></a>
        <a href="https://www.instagram.com/kristelle_023"><i class='bx bxl-instagram'></i></a>
        <a href="mailto:kristelleannemiranda@gmail.com"><i class='bx bx-envelope'></i></a>
    </div>

    <!-- Images -->
    <div class="images">
        <img src="{{ asset('images/2.png') }}" class="shape">
        <img src="{{ asset('images/i.png') }}" class="girl">
    </div>

    <!-- "More About Me" Button -->
    <a href="{{ url('/aboutme') }}" class="button-box">More About Me</a>
</div>
@endsection 
