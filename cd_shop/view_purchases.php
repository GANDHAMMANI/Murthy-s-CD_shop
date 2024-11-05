<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View All Purchases</title>
    <link rel="stylesheet" href="style.css">
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
            background-color: wheat; /* Highlight on hover */
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
            background: linear-gradient(135deg, #4cae4c, #5cb85c); /* Green gradient on hover */
            transform: scale(1.05);
        }

        /* Additional styles for improved spacing */
        .table-wrapper {
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <h1>All Purchases</h1>
    <button class="back" onclick="window.location.href='menu.php'">Go Back to Main Menu</button>
    <table>
        <tr>
            <th>Purchase ID</th>
            <th>Movie Title</th>
            <th>Quantity</th>
            <th>Purchase Date</th>
            <th>Total Amount</th>
            <th>Payment Mode</th>
            <th>Customer Phone Number</th> <!-- New header for phone number -->
        </tr>
        <?php
        include 'db.php';

        // Fetch purchase details
        $stmt = $pdo->query("SELECT purchases.purchase_id, CDs.title AS movie_title, purchases.quantity, purchases.purchase_date, purchases.total_amount, purchases.payment_mode, purchases.cust_phone_num
                             FROM purchases
                             JOIN CDs ON Purchases.cd_id = CDs.cd_id");

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
                    <td>{$row['purchase_id']}</td>
                    <td>{$row['movie_title']}</td>
                    <td>{$row['quantity']}</td>
                    <td>{$row['purchase_date']}</td>
                    <td>{$row['total_amount']}</td>
                    <td>{$row['payment_mode']}</td>
                    <td>{$row['cust_phone_num']}</td>
                  </tr>";
        }
        ?>
    </table>
    
    <!-- Export Button -->
    <button class="back" onclick="window.location.href='export_purchases.php'">Export to CSV</button>
    
    <button class="back" onclick="window.location.href='menu.php'">Go Back to Main Menu</button>
</body>
</html>
