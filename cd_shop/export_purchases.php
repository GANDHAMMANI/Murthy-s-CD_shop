<?php
include 'db.php';

// Set the headers to trigger a download
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="purchases.csv"');

// Open a file pointer for output
$output = fopen('php://output', 'w');

// Write the header row
fputcsv($output, ['Purchase ID', 'Movie Title', 'Quantity', 'Purchase Date', 'Total Amount', 'Payment Mode', 'Customer Phone Number']);

// Fetch the purchase details from the database
$stmt = $pdo->query("SELECT purchases.purchase_id, CDs.title AS movie_title, purchases.quantity, purchases.purchase_date, purchases.total_amount, purchases.payment_mode, purchases.cust_phone_num
                     FROM purchases
                     JOIN CDs ON Purchases.cd_id = CDs.cd_id");

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    // Write each row to the CSV file
    fputcsv($output, $row);
}

// Close the output stream
fclose($output);
exit();
?>
