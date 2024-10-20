
<!-- resources/views/content.blade.php -->
@extends('Components.Layout') <!-- This extends your Layout.blade.php -->
@section('title', 'Username - Content') <!-- This sets the title section -->

@section('content') <!-- This defines the content section -->  
    <div class="hero">
        <section id="personal-info">
            <h1 style="text-align: center; color: rgb(181, 99, 117); font-size: 45px; margin-top: 6%;">CONTENT</h1> <br>
            <h2 style="text-align: center; color: rgb(76, 75, 75); font-size: 20px; margin-top: -2%; margin-bottom: 10px;"> ~ Each experience has shaped my learning journey! Come explore my growth and achievements throughout this course!" ~</h2> <br>
            <table class="table2">
                <tr>
                    <th><a href="{{ url('lab1') }}"><img class="hobbiespictures" src="{{ asset('images/Setup.png') }}" alt="SetUp"></a></th>
                    <th><a href="{{ url('lab2') }}"><img class="hobbiespictures" src="{{ asset('images/Routes.png') }}" alt="Routes"></a></th>
                    <th><a href="{{ url('lab3') }}"><img class="hobbiespictures" src="{{ asset('images/Layout.png') }}" alt="Layout"></a></th>
                    <th><a href="{{ url('lab4') }}"><img class="hobbiespictures" src="{{ asset('images/Middleware.png') }}" alt="Middleware"></a></th>
                </tr>
            </table>
        </section>
    </div>
@endsection
