<!-- resources/views/accessDenied.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Denied</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <style>
        .denies-site{
            background-color: #fff;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }
        .denied-container {
            display: flex;
            flex-direction: column;
            align-items: center; /* Center horizontally */
            justify-content: center; /* Center vertically */
            height: 100vh; /* Full height of the viewport */
            text-align: center; /* Center text */
            padding: 20px; /* Padding around content */
        }
        /* Heading styling */
        .denied-container h1 {
            font-size: 2.5rem; /* Larger font size for the heading */
            color: #d9534f; /* Use a color to indicate a warning (red) */
            margin-bottom: 5px; /* Space below heading */
        }

        /* Paragraph styling */
        .denied-container p {
            font-size: 1.2rem; /* Slightly larger text */
            color: #666; /* Darker text color for contrast */
            margin-bottom: 15px; /* Space below the paragraph */
        }

        /* Button styling */
        .denied-container .btn-primary {
            display: inline-block; 
            padding: 10px 20px; 
            background-color: #007bff; 
            color: white; 
            text-decoration: none; 
            border-radius: 5px; 
            transition: background-color 0.3s; 
        }

        /* Button hover effect */
        .denied-container .btn-primary:hover {
            background-color: #31b0d5; /* Darker shade on hover */
        }
        .denied-container i{
            font-size: 6rem;
            color: #007bff;
            margin-bottom: 6px
        }
    </style>
</head>
<body>
    <main class="denies-site">
        <div class="denied-container">
            <i class="fa-solid fa-lock"></i>
            <h1>We are Sorry...</h1>
            <p>The site you're trying to access has restricted access.</p>
            <a href="http://127.0.0.1:8000/" class="btn-primary">Go Back</a> <!-- Adjust the route as needed -->
        </div>
    </main>
</body>
</html>
