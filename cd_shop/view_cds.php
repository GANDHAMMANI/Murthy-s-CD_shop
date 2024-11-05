<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View All CDs</title>
    <style>
        /* General body styling */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #f4f4f4, #e0eafc);
            color: #333;
            margin: 0;
            padding: 20px;
        }

        /* Main heading */
        h1 {
            text-align: center;
            color: #333;
            font-size: 2em;
            margin-bottom: 20px;
        }

        /* Form styling */
        form {
            margin: 20px auto;
            display: flex;
            justify-content: center;
            gap: 10px;
            max-width: 600px;
        }
        select, input[type="text"], button {
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 1em;
            transition: all 0.3s ease;
        }
        input[type="text"] {
            flex: 1;
        }
        button {
    background: linear-gradient(135deg, #007bff, #0056b3); /* Blue gradient */
    color: white;
    border: none;
    cursor: pointer;
    padding: 12px 20px; /* Add padding for better size */
    border-radius: 8px; /* Rounded corners */
    font-size: 1em; /* Consistent font size */
    transition: background 0.3s ease, transform 0.3s ease; /* Smooth transition */
}

button:hover {
    background: linear-gradient(135deg, #0056b3, #007bff); /* Reverse gradient on hover */
    transform: scale(1.05); /* Slightly scale up on hover */
}

        /* Table styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
            color: #555;
        }
        tr {
            transition: background-color 0.3s ease;
        }
        tr:hover {
            background-color: wheat;
        }

        /* Back button styling */
    
            .back {
    width: 220px;
    margin: 30px auto;
    padding: 12px;
    background: linear-gradient(135deg, #007bff, #0056b3); /* Blue gradient */
    color: white;
    font-size: 1em;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s ease;
}

        
        .back:hover {
            background: linear-gradient(135deg, #4cae4c, #5cb85c);
            transform: scale(1.05);
        }

        /* Additional styles for improved spacing */
        .table-wrapper {
            overflow-x: auto;
        }
    </style>
</head>
<body>
<button onclick="window.location.href='menu.php'" class="back">Go Back to Main Menu</button>
    <h1>All CDs</h1>
    
    <!-- Search Form -->
    <form method="GET" action="">
        <select name="column">
            <option value="title">Title</option>
            <option value="artist">Director</option>
            <option value="genre">Genre</option>
            <option value="release_year">Release Year</option>
            <option value="price">Price</option>
            <option value="hero">Hero</option>
            <option value="heroine">Heroine</option>
            <option value="quantity">Quantity</option>
        </select>
        <input type="text" name="search" placeholder="Search..." required>
        <button type="submit">Search</button>
    </form>

    <!-- Table Wrapper for Responsive Design -->
    <div class="table-wrapper">
        <table>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Director</th>
                <th>Genre</th>
                <th>Release Year</th>
                <th>Price</th>
                <th>Hero</th>
                <th>Heroine</th>
                <th>Quantity</th>
            </tr>
            <?php
            include 'db.php';

            // Initialize search variables
            $search = isset($_GET['search']) ? $_GET['search'] : '';
            $column = isset($_GET['column']) ? $_GET['column'] : 'title';

            // Validate column input to prevent SQL injection
            $allowedColumns = ['title', 'artist', 'genre', 'release_year', 'price', 'hero', 'heroine', 'quantity'];
            if (!in_array($column, $allowedColumns)) {
                $column = 'title'; // Default to title if invalid
            }

            // Prepare SQL query based on the search term and selected column
            if ($search) {
                // Adjust query to include artist as a secondary search option
                $stmt = $pdo->prepare("SELECT * FROM cds WHERE $column LIKE ? OR artist LIKE ? OR genre LIKE ?");
                $searchTerm = "%$search%"; // Wildcard search
                $stmt->execute([$searchTerm, $searchTerm, $searchTerm]);
            } else {
                // If no search term, fetch all records
                $stmt = $pdo->query("SELECT * FROM cds");
            }

            // Display the records
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>
                        <td>{$row['cd_id']}</td>
                        <td>{$row['title']}</td>
                        <td>{$row['artist']}</td>
                        <td>{$row['genre']}</td>
                        <td>{$row['release_year']}</td>
                        <td>{$row['price']}</td>
                        <td>{$row['hero']}</td>
                        <td>{$row['heroine']}</td>
                        <td>{$row['quantity']}</td>
                      </tr>";
            }
            ?>
        </table>
    </div>
    <button onclick="window.location.href='menu.php'" class="back">Go Back to Main Menu</button>
</body>
</html>
