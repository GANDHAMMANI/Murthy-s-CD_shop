<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulk Upload CDs</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa; /* Light grey background */
            color: #333; /* Dark text for readability */
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 2em; /* Adjusted font size */
            color: #343a40; /* Darker color for headings */
            border-bottom: 2px solid #007bff; /* Blue underline for formality */
            padding-bottom: 10px; /* Spacing below heading */
        }

        form {
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #007bff; /* Blue border for emphasis */
            border-radius: 8px;
            background: #ffffff; /* White background for form */
            width: 400px; /* Increased width for better layout */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
        }

        label {
            margin-bottom: 8px;
            font-weight: bold; /* Bold labels */
            color: #495057; /* Dark grey for labels */
            display: block; /* Block display for labels */
        }

        input[type="file"] {
            margin: 10px 0;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ced4da; /* Light grey border */
            background: #f8f9fa; /* Light grey background */
            color: #495057; /* Dark text */
            width: 100%; /* Full width */
            box-sizing: border-box; /* Include padding in width */
        }

        button {
            background-color: #007bff; /* Blue button */
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s, transform 0.2s; /* Smooth transitions */
            margin-top: 10px;
            width: 100%; /* Full width */
        }

        button:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }

        .back-button {
            margin-top: 20px;
            padding: 10px;
            background-color: grey; /* Grey back button */
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 1em; /* Consistent font size */
            transition: background-color 0.3s, transform 0.3s;
            width: 20%; /* Full width */
        }

        .back-button:hover {
            background-color: green; /* Darker grey on hover */
            transform: scale(1.05); /* Scale up on hover */
        }

        p {
            margin-top: 20px;
            color: #28a745; /* Green success message */
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Bulk Upload CDs</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="file">Upload CSV File:</label>
        <input type="file" name="file" accept=".csv" required>
        <button type="submit">Upload</button>
    </form>

    <?php
    include 'db.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_FILES['file'])) {
            $file = $_FILES['file']['tmp_name'];

            if (($handle = fopen($file, 'r')) !== FALSE) {
                // Skip the header row
                fgetcsv($handle);

                while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
                    // Validate and sanitize data
                    $title = $data[0];
                    $artist = $data[1];
                    $genre = $data[2];
                    $release_year = (int)$data[3];
                    $price = (float)$data[4];
                    $hero = $data[5];
                    $heroine = $data[6];
                    $quantity = (int)$data[7];

                    // Prepare and execute the SQL statement
                    $stmt = $pdo->prepare("INSERT INTO cds (title, artist, genre, release_year, price, hero, heroine, quantity) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
                    $stmt->execute([$title, $artist, $genre, $release_year, $price, $hero, $heroine, $quantity]);
                }
                fclose($handle);
                echo "<p>CDs uploaded successfully!</p>";
            } else {
                echo "<p>Error opening the file.</p>";
            }
        } else {
            echo "<p>No file was uploaded.</p>";
        }
    }
    ?>

    <button class="back-button" onclick="window.location.href='menu.php'">Back to Main Menu</button>
</body>
</html>
