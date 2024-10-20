<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Middleware\LogRequest;

// Group routes that use LogRequest middleware
Route::middleware([LogRequest::class])->group(function () {

    // Login route
    Route::get('/', function () {
        return view('login'); // Assuming 'login.blade.php' is the login page
    })->name('login');

    // Route to handle the username and role submission, and store them in the session
    Route::post('/set-username', function (Request $request) {
        $username = $request->input('username') ?: 'Guest';
        $role = $request->input('role'); // Get the selected role

        // Log received data
        \Log::info("Received username: $username, role: $role");

        // Store the username and role in the session
        session(['username' => $username, 'role' => $role]);

        // Save the session to ensure it's persisted
        session()->save();

        // Check if the role is 'none'
        if ($role === 'none') {
            \Log::info("Role is 'none', redirecting to accessDenied.");
            return redirect()->route('accessDenied'); // Redirect to access denied page
        }

        \Log::info("Redirecting to home page.");
        // Redirect to the home page
        return redirect()->route('home');
    })->name('set-username');

    // Home page route
    Route::get('/home', function () {
        $username = session('username', 'Guest');
        $role = session('role', ''); // Retrieve the role from the session

        \Log::info("Username: $username, Role: $role");

        return view('home', ['username' => $username, 'role' => $role]);
    })->name('home');

    // About page route
    Route::get('/aboutme', function () {
        $username = session('username', 'Guest');
        $role = session('role', ''); // Retrieve the role from the session

        \Log::info("Username: $username, Role: $role");

        return view('aboutme', ['username' => $username, 'role' => $role]);
    })->name('aboutme');

    // Content page route
    Route::get('/content', function () {
        $username = session('username', 'Guest');
        $role = session('role', ''); // Retrieve the role from the session

        \Log::info("Username: $username, Role: $role");

        return view('content', ['username' => $username, 'role' => $role]);
    })->name('content');

    // Contact Us page route
    Route::get('/contact', function () {
        $username = session('username', 'Guest');
        $role = session('role', ''); // Retrieve the role from the session

        \Log::info("Username: $username, Role: $role");

        return view('contact', ['username' => $username, 'role' => $role]);
    })->name('contact');

    // Access Denied route
    Route::get('/denied', function () {
        \Log::info('Access Denied page visited');
        return view('denied'); // Ensure you have the 'denied.blade.php' view
    })->name('accessDenied');
});

// Additional lab routes (Not part of the middleware group)
Route::get('/lab1', function () {
    return view('lab1');
});

Route::get('/lab2', function () {
    return view('lab2');
});

Route::get('/lab3', function () {
    return view('lab3');
});

Route::get('/lab4', function () {
    return view('lab4');
});
