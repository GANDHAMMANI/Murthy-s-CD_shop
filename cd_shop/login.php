<?php
session_start(); // Start the session at the very top of the file

// Predefined credentials
$valid_username = "admin";
$valid_password = "p123";

// Initialize error message variable
$error_message = "";

// Check for form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate credentials
    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['loggedin'] = true;
        header("Location: menu.php");
        exit();
    } else {
        $error_message = '<p class="error">Invalid username or password.</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CD Shop</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #f8cdda, #1d2b64);
            color: #ffffff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
            transition: background 0.5s;
        }
        
        h1 {
            margin-bottom: 30px;
            font-size: 2.5em;
            animation: fadeIn 1s ease;
            text-align: center; /* Center the heading */
        }

        form {
            background: rgba(255, 255, 255, 0.15);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 90%; /* Set to 90% for responsiveness */
            max-width: 400px; /* Max width for larger screens */
            height: auto; /* Auto height based on content */
            transition: transform 0.3s;
            animation: slideIn 0.5s ease-out;
        }

        input[type="text"], input[type="password"] {
            margin: 10px 0;
            padding: 12px;
            border: none;
            border-radius: 5px;
            width: 100%; 
            background: rgba(255, 255, 255, 0.3);
            color: #000;
            font-size: 1em;
            transition: box-shadow 0.3s, background 0.3s;
        }

        input:focus {
            outline: none;
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.8);
            background: rgba(255, 255, 255, 0.5);
        }

        button {
            padding: 12px 25px;
            background-color: #5cb85c;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1em;
            margin-top: 15px;
            transition: background-color 0.3s, transform 0.2s;
            width: 100%; /* Full width */
        }

        button:hover {
            background-color: #4cae4c;
            transform: translateY(-2px);
        }

        .error {
            color: red;
            margin-top: 10px;
            font-size: 0.9em;
            animation: fadeIn 0.5s ease;
        }

        /* Keyframes for animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                transform: translateY(-30px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Responsive design adjustments */
        @media (max-width: 600px) {
            h1 {
                font-size: 2em; /* Smaller font size on smaller screens */
            }
            form {
                padding: 30px; /* Reduced padding */
                width: 90%; /* Make form width responsive */
            }
            button {
                padding: 10px 20px; /* Adjust button size */
                font-size: 1em; /* Smaller button text */
            }
        }

        @media (max-width: 400px) {
            h1 {
                font-size: 1.8em; /* Further reduce font size for extra small screens */
            }
            form {
                padding: 20px; /* Further reduced padding */
            }
            input[type="text"], input[type="password"] {
                font-size: 0.9em; /* Smaller font size for input fields */
            }
            button {
                font-size: 0.9em; /* Smaller button text */
            }
        }
    </style>
</head>
<body>
    <h1>Login to CD Shop</h1>
    <form action="" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
        <?php if (!empty($error_message)) echo $error_message; // Display error message if set ?>
    </form>
</body>
</html>
