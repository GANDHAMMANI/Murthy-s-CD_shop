<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EOD Summary</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #f8f9fa, #e0eafc);
            color: #333;
            padding: 20px;
            text-align: center;
            margin: 0;
        }
        h1 {
            margin-bottom: 30px;
            font-size: 2.5em;
            color: #1d2b64;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }
        table {
            width: 80%; /* Set width to 80% for better centering */
            margin: 20px auto;
            border-collapse: collapse;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }
        th {
            background-color: #f1f1f1;
            color: #333;
            font-weight: bold;
        }
        tr:hover {
            background-color: rgba(0, 123, 255, 0.1); /* Highlight on row hover */
        }
        button {
            margin-top: 30px;
            padding: 10px 20px;
            background: linear-gradient(135deg, #007bff, #0056b3); /* Blue gradient */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
            font-size: 1em;
            width: 200px; /* Fixed width for button */
        }
        button:hover {
            background: linear-gradient(135deg, #0056b3, #007bff); /* Reverse gradient on hover */
            transform: translateY(-2px); /* Slight lift on hover */
        }
        /* Responsive design */
        @media (max-width: 768px) {
            table {
                width: 95%; /* Full width on smaller screens */
            }
            h1 {
                font-size: 2em; /* Smaller heading on mobile */
            }
            button {
                width: 80%; /* Make button wider on mobile */
            }
        }
    </style>
</head>
<body>
    <h1>End of Day Summary</h1>
    <table>
        <tr>
            <th>Date</th>
            <th>Total Sales</th>
            <th>Total Profit</th>
            <th>Total Loss</th>
        </tr>
        <?php
include 'db.php';

try {
    // Get today's date
    $today = date('Y-m-d');

    // Fetch total sales, profits, and losses for today
    $stmt = $pdo->prepare("SELECT SUM(total_sales) AS total_sales, SUM(total_profit) AS total_profit, SUM(total_loss) AS total_loss FROM sales WHERE DATE(purchase_date) = ?");
    $stmt->execute([$today]);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    // Initialize values to 0 if there are no records for today
    $totalSales = $data['total_sales'] ?? 0;
    $totalProfit = $data['total_profit'] ?? 0;
    $totalLoss = $data['total_loss'] ?? 0;

    // Output the summary for today
    echo "<tr>
            <td>{$today}</td>
            <td>" . number_format($totalSales, 2) . "</td>
            <td>" . number_format($totalProfit, 2) . "</td>
            <td>" . number_format($totalLoss, 2) . "</td>
          </tr>";

} catch (PDOException $e) {
    // Handle any errors, log them or redirect to an error page
    error_log($e->getMessage()); // Log error to server log
    echo "<tr><td colspan='4'>Error retrieving sales data.</td></tr>"; // Display a generic error message
}
?>

    </table>
    <button onclick="window.location.href='menu.php'">Go Back to Main Menu</button>
</body>
</html>
