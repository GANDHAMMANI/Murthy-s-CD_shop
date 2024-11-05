<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CD Shop</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient( #f8cdda, #1d2b64);
            margin: 0;
            padding: 20px;
            color: #ffffff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            overflow: hidden;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 4em;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            animation: fadeInTitle 1.5s ease-in-out;
        }

        nav {
            text-align: center;
            margin: 20px 0;
            animation: fadeInNav 1s ease-in-out;
        }

        ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        li {
            margin: 0 15px;
        }

        a {
            text-decoration: none;
            color: #ffffff;
            padding: 12px 24px;
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.15);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            font-size: 1.2em;
            display: inline-block;
        }

        a:hover {
            transform: scale(1.08) rotate(1deg); /* Subtle scaling and rotation */
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3); /* Slight shadow on hover */
        }

        .logout-button {
            background-color: rgba(255, 0, 0, 0.7);
            padding: 12px 24px;
            margin-top: 40px;
            border-radius: 8px;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .logout-button:hover {
            background-color: rgba(255, 0, 0, 0.85);
            transform: scale(1.08) rotate(-1deg);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
        }

        .additional-buttons {
            margin-top: 30px;
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            font-size: 1em;
            animation: fadeInFooter 2s ease-in-out;
            position: absolute;
            bottom: 20px;
        }

        /* Keyframes for animations */
        @keyframes fadeInTitle {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInNav {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInFooter {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive design adjustments */
        @media (max-width: 600px) {
            h1 {
                font-size: 2.2em;
            }
            a {
                padding: 10px 15px;
                font-size: 1em;
            }
            .additional-buttons {
                flex-direction: column;
                align-items: center;
            }
        }

        @media (max-width: 400px) {
            h1 {
                font-size: 1.8em;
            }
            footer {
                font-size: 0.8em;
                bottom: 10px;
            }
        }
    </style>
</head>
<body>
    <h1>Welcome to the CD Shop</h1>
    <nav>
        <ul>
            <li><a href="view_cds.php">View All CDs</a></li>
            <li><a href="add_cd.php">Add New CD</a></li>
            <li><a href="record_purchase.php">Record a Purchase</a></li>
            <li><a href="view_purchases.php">View All Purchases</a></li>
        </ul>
    </nav>

    <div class="additional-buttons">
        <a href="eod_summary.php">End of Day Summary</a>
        <a href="bulk_upload.php">Bulk Upload CDs</a>
    </div>

    <div class="logout-container">
        <a href="index.php" class="logout-button">Logout</a>
    </div>
    
    <footer>
        <p>&copy; 2024 Murthy's CD shop. All Rights Reserved.</p>
    </footer>
</body>
</html>
