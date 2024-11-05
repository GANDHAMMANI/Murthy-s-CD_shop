<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New CD</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        form {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 350px; /* Increased width for better layout */
            transition: transform 0.3s ease;
            position: relative; /* Position relative for pseudo-elements */
        }

        form:hover {
            transform: scale(1.02);
        }

        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
        }

        label {
            margin-bottom: 5px;
            color: #555;
            font-weight: bold; /* Make labels bold */
        }

        input[type="text"],
        input[type="number"] {
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="number"]:focus {
            border-color: #5cb85c;
            outline: none;
            box-shadow: 0 0 5px rgba(92, 184, 92, 0.5); /* Subtle glow on focus */
        }

        button {
            background-color: #5cb85c;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            margin-top: 10px;
            font-size: 1em; /* Consistent font size */
        }

        button:hover {
            background-color: #4cae4c;
            transform: translateY(-2px);
        }

        button.back {
            margin-top: 20px;
            background-color: #007bff;
        }

        button.back:hover {
            background-color: #0056b3;
        }

        p {
            margin-top: 20px;
            color: #28a745;
            font-weight: bold;
            text-align: center; /* Center align success message */
        }
    </style>
</head>
<body>
    <h1>Add New CD</h1>
    <form action="" method="POST">
        <div class="form-group">
            <label for="title">CD Title:</label>
            <input type="text" name="title" size="30" required>
        </div>
        <div class="form-group">
            <label for="artist">Director Name:</label>
            <input type="text" name="artist" size="30" required>
        </div>
        <div class="form-group">
            <label for="genre">Genre:</label>
            <input type="text" name="genre" size="30">
        </div>
        <div class="form-group">
            <label for="release_year">Release Year:</label>
            <input type="number" name="release_year" size="30">
        </div>
        <div class="form-group">
            <label for="price">Price (in integers):</label>
            <input type="number" name="price" size="30" required>
        </div>
        <div class="form-group">
            <label for="hero">Hero Name:</label>
            <input type="text" name="hero" size="30">
        </div>
        <div class="form-group">
            <label for="heroine">Heroine Name:</label>
            <input type="text" name="heroine" size="30">
        </div>
        <button type="submit">Add CD</button>
    </form>
    <button class="back" onclick="window.location.href='menu.php'">Go Back to Main Menu</button>

    <?php
    include 'db.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $stmt = $pdo->prepare("INSERT INTO CDs (title, artist, genre, release_year, price, hero, heroine) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$_POST['title'], $_POST['artist'], $_POST['genre'], $_POST['release_year'], $_POST['price'], $_POST['hero'], $_POST['heroine']]);
        echo "<p>CD added successfully!</p>";
    }
    ?>
</body>
</html>
