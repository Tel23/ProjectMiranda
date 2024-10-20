@extends('Components.Layout')
@section('title', 'Username - Log in')

@section('content')
<div class="hero">
        <div class="card" id="loginForm" action="/home" method="POST">
            <img class="card-img-top" src="{{ asset('images/hi.png') }}" alt="Card image">
            <div class="card-body">
                <div class="center">
                    <form action="{{ route('set-username') }}" method="POST">
                        @csrf <!-- Important for security in POST requests -->
                        <label for="username">Please enter your username:</label>
                        <input type="text" id="username" name="username" value="{{ old('username') }}" 
                        pattern="[a-zA-Z]*" title="Please enter only alphabetic characters." required>

                        <label for="role">Select your role:</label>
                        <select id="role" name="role" required>
                            <option value="" disabled selected>Select your role</option>
                            <option value="none">None</option> <!-- Added None option -->
                            <option value="student">Student</option>
                            <option value="professor">Professor</option>
                        </select>
                        
                        <button type="submit" class="btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection