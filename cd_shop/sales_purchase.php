<?php
include 'db.php';

// Assume you have already processed the purchase and calculated $totalAmount
// For example, $totalAmount could be calculated based on items purchased
$totalAmount = calculateTotalAmount(); // Your existing function to calculate the total

// Assuming $totalAmount is calculated during the purchase
$profit = $totalAmount * 0.20; // Example profit calculation
$loss = $totalAmount * 0.10; // Example loss calculation

// Prepare SQL statement to insert into sales table
$stmt = $pdo->prepare("INSERT INTO sales (purchase_date, total_amount, profit, loss) VALUES (?, ?, ?, ?)");
$stmt->execute([date('Y-m-d'), $totalAmount, $profit, $loss]);

// Rest of your purchase logic, e.g., updating inventory, confirming purchase, etc.

// Redirect or display a confirmation message
header("Location: success.php"); // Redirect after successful purchase
exit();
?>
