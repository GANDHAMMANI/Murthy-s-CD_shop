<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Murthy's CD Shop - Menu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('dvd-movies-A0J1TM.jpg'); /* Set your background image */
            background-size: cover; /* Cover the entire viewport */
            background-position: center; /* Center the image */
            color: #fff; /* Text color */
            height: 100vh; /* Full height */
            display: flex; /* Flexbox for centering */
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            padding: 20px; /* Padding for space */
            overflow: hidden; /* Prevent scrolling */
        }

        .overlay {
            background: rgba(0, 0, 0, 0.7); /* Semi-transparent background overlay */
            border-radius: 15px; /* More rounded corners */
            padding: 30px; /* Padding for content */
        }

        .welcome-message {
            font-size: 4em; /* Large font size */
            font-weight: bold; /* Bold text */
            text-align: center; /* Center text */
            margin-bottom: 30px; /* Space below */
            transition: transform 0.3s ease, opacity 0.3s ease; /* Transition for hover effect */
            opacity: 0.9; /* Slightly transparent */
            background-clip: text; /* Allows gradient text */
            -webkit-background-clip: text; /* For Safari */
            color: transparent; /* Make the text color transparent */
            background-image: linear-gradient(135deg, #fff, #ff6f91); /* Gradient color */
        }

        .welcome-message:hover {
            transform: scale(1.05); /* Scale up on hover */
            opacity: 1; /* Full opacity on hover */
        }

        .shop-image {
            width: 100%; /* Full width */
            border-radius: 15px; /* Rounded corners */
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.5); /* Shadow effect */
            opacity: 0.9; /* Slightly transparent */
            transition: transform 0.3s ease; /* Transition for scaling */
            margin-bottom: 20px; /* Space between images */
        }

        .shop-image:hover {
            transform: scale(1.05); /* Scale up image on hover */
        }

        .btn-custom {
            background: linear-gradient(135deg, #ffb300, #ff6f91); /* Gradient background */
            color: white; /* Button text color */
            border-radius: 25px; /* More rounded corners */
            padding: 15px; /* Increased padding */
            transition: background-color 0.3s, transform 0.3s; /* Transition effect */
            display: block; /* Block-level element */
            width: 100%; /* Full width on smaller screens */
            font-size: 1.5em; /* Increased button font size */
            border: none; /* Remove border */
            box-shadow: 0 0 10px rgba(255, 179, 0, 0.8), 0 0 20px rgba(255, 105, 180, 0.6), 0 0 30px rgba(255, 105, 180, 0.4); /* Gradient glowing effect */
            margin: 30px 0; /* Space around the button */
        }

        .btn-custom:hover {
            background: linear-gradient(135deg, #ff6f91, #ffb300); /* Reverse gradient on hover */
            transform: translateY(-2px); /* Lift effect on hover */
        }

        /* Additional styling for the third image */
        .shop-image-third {
            margin-top: -150px; /* Increase this value to move the image further upwards */
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .welcome-message {
                font-size: 2.5em; /* Smaller font size on mobile */
            }
            .btn-custom {
                font-size: 1.2em; /* Adjust button font size on mobile */
            }
            .shop-image-third {
                margin-top: -100px; /* Adjust positioning for mobile */
            }
        }

        @media (max-width: 576px) {
            .welcome-message {
                font-size: 2em; /* Smaller font size on extra small screens */
            }
            .btn-custom {
                font-size: 1em; /* Further reduce button text size */
                padding: 10px; /* Adjust padding */
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row text-center text-md-start">
            <div class="col-md-6 overlay"> <!-- Column for text and button -->
                <div class="welcome-message">
                    Welcome Murthy Let's start the Bussiness.. Buddy
                </div>
                <button class="btn btn-custom" onclick="window.location.href='login.php'">Login</button> <!-- Redirect to login page -->
            </div>
            <div class="col-md-6 overlay"> <!-- Column for images -->
                <div class="row">
                    <div class="col-6">
                        <img src="cd1.jpg" alt="CD Image 1" class="shop-image"> <!-- First image -->
                    </div>
                    <div class="col-6">
                        <img src="cd3.jpg" alt="CD Image 2" class="shop-image"> <!-- Second image -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 offset-6">
                        <img src="og.webp" alt="CD Image 3" class="shop-image shop-image-third"> <!-- Third image positioned beneath the second -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
