<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Record Purchase</title>
    <!-- Add Bootstrap for improved styling and layout -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <style>
        /* Enhanced styling and transitions */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f4f4f4, #ffffff);
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
            font-size: 2.5rem;
            margin-bottom: 30px;
            background: -webkit-linear-gradient(left, #6a11cb, #2575fc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        form {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            max-width: 700px;
            margin: 0 auto;
            transition: all 0.3s ease;
        }
        label {
            font-weight: bold;
            color: #555;
        }
        .cd-row {
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #ddd;
        }
        input[type="text"], input[type="number"], input[type="date"], input[type="tel"], .select2-container--default .select2-selection--single {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            margin-bottom: 15px;
            transition: all 0.3s ease;
        }
        input[type="text"]:focus, input[type="number"]:focus, input[type="date"]:focus, input[type="tel"]:focus, .select2-selection--single:focus {
            border-color: #6a11cb;
            box-shadow: 0 0 8px rgba(106, 17, 203, 0.2);
        }
        button, .btn {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        button:hover, .btn:hover {
            background: linear-gradient(135deg, #2575fc, #6a11cb);
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            background: #dff0d8;
            border: 1px solid #d6e9c6;
            color: #3c763d;
            border-radius: 5px;
            animation: fadeIn 0.5s;
        }
        .change {
            margin-top: 10px;
            padding: 10px;
            background: #f0ad4e;
            color: white;
            border-radius: 5px;
            animation: fadeIn 0.5s;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .select2-container--default .select2-selection--single {
    height: 42px; /* adjust height for better visibility */
    font-size: 1rem;
    padding: 8px;
    border-radius: 5px;
    border: 1px solid #ddd;
}
.select2-container--default .select2-results__option {
    font-size: 1rem;
    padding: 10px;
}

    </style>
</head>
<body>
    <h1>Record a Purchase</h1>
    <form action="" method="POST">
        <div id="cdContainer">
            <div class="cd-row">
            <label for="cd_id_1">Select Movie:</label>
<select name="cd_id[]" id="cd_id_1" class="select-movie" required onchange="updatePrice(1)" style="padding: 8px; font-size: 1rem; width: 100%;">
    <option value="">-- Select a Movie --</option>
    <?php
    include 'db.php';
    $stmt = $pdo->query("SELECT cd_id, title, price FROM CDs");
    while ($cd = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<option value='{$cd['cd_id']}' data-price='{$cd['price']}'>{$cd['title']} - $" . number_format($cd['price'], 2) . "</option>";
    }
    ?>
</select>


                <label for="quantity_1">Quantity:</label>
                <input type="number" name="quantity[]" id="quantity_1" value="1" min="1" required onchange="updatePrice(1)">

                <label for="total_amount_1">Total Amount:</label>
                <input type="text" name="total_amount[]" id="total_amount_1" readonly>
            </div>
        </div>

        <button type="button" class="btn btn-primary" onclick="addCdRow()">Add Another CD</button>

        <div class="mt-3">
            <label for="grand_total">Grand Total:</label>
            <input type="text" id="grand_total" name="grand_total" readonly>
        </div>

        <label for="purchase_date" class="mt-3">Purchase Date:</label>
        <input type="date" name="purchase_date" value="<?php echo date('Y-m-d'); ?>" required>

        <label for="payment_mode" class="mt-3">Payment Mode:</label>
        <select name="payment_mode" id="payment_mode" onchange="togglePaymentFields()" class="form-control">
            <option value="">-- Select Payment Mode --</option>
            <option value="cash">Cash</option>
            <option value="phonepe">PhonePe</option>
        </select>

        <div id="cash_fields" style="display: none;">
            <label for="cash_given" class="mt-3">Cash Given:</label>
            <input type="number" name="cash_given" id="cash_given" placeholder="Enter cash given" class="form-control">
            <div id="change" class="change" style="display: none;"></div>
        </div>

        <label for="cust_phone_num" class="mt-3">Customer Phone Number:</label>
        <input type="tel" name="cust_phone_num" id="cust_phone_num" placeholder="Enter customer phone number" class="form-control" required>

        <button type="submit" class="btn btn-success mt-4">Record Purchase</button>
    </form>
    <button onclick="window.location.href='menu.php'" class="btn btn-secondary mt-4">Go Back to Main Menu</button>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        let cdCount = 1;

        $(document).ready(function() {
            $('.select-movie').select2({
                placeholder: "-- Select a Movie --",
                width: '100%'
            });
        });

        function updatePrice(row) {
            const select = document.getElementById(`cd_id_${row}`);
            const quantity = document.getElementById(`quantity_${row}`).value;
            const price = select.options[select.selectedIndex].getAttribute("data-price");

            if (price) {
                const totalAmount = price * quantity;
                document.getElementById(`total_amount_${row}`).value = totalAmount.toFixed(2);
                updateGrandTotal();
            }
        }

        function addCdRow() {
            cdCount++;
            const cdContainer = document.getElementById("cdContainer");
            const newCdRow = document.createElement("div");
            newCdRow.classList.add("cd-row");

            newCdRow.innerHTML = `
                <label for="cd_id_${cdCount}">Select Movie:</label>
                <select name="cd_id[]" id="cd_id_${cdCount}" class="select-movie" required onchange="updatePrice(${cdCount})">
                    <option value="">-- Select a Movie --</option>
                    <?php
                    $stmt = $pdo->query("SELECT cd_id, title, price FROM CDs");
                    while ($cd = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<option value='{$cd['cd_id']}' data-price='{$cd['price']}'>{$cd['title']} - $" . number_format($cd['price'], 2) . "</option>";
                    }
                    ?>
                </select>

                <label for="quantity_${cdCount}">Quantity:</label>
                <input type="number" name="quantity[]" id="quantity_${cdCount}" value="1" min="1" required onchange="updatePrice(${cdCount})">

                <label for="total_amount_${cdCount}">Total Amount:</label>
                <input type="text" name="total_amount[]" id="total_amount_${cdCount}" readonly>
            `;

            cdContainer.appendChild(newCdRow);
            $(`#cd_id_${cdCount}`).select2({
                placeholder: "-- Select a Movie --",
                width: '100%'
            });
        }

        function updateGrandTotal() {
            let grandTotal = 0;
            for (let i = 1; i <= cdCount; i++) {
                const totalAmount = parseFloat(document.getElementById(`total_amount_${i}`).value) || 0;
                grandTotal += totalAmount;
            }
            document.getElementById("grand_total").value = grandTotal.toFixed(2);
        }

        function togglePaymentFields() {
            const paymentMode = document.getElementById("payment_mode").value;
            const cashFields = document.getElementById("cash_fields");
            if (paymentMode === "cash") {
                cashFields.style.display = "block";
                document.getElementById("cash_given").addEventListener("input", calculateChange);
            } else {
                cashFields.style.display = "none";
                document.getElementById("change").style.display = "none";
            }
        }

        function calculateChange() {
            const grandTotal = parseFloat(document.getElementById("grand_total").value) || 0;
            const cashGiven = parseFloat(document.getElementById("cash_given").value) || 0;
            const changeDisplay = document.getElementById("change");

            if (cashGiven >= grandTotal) {
                const change = cashGiven - grandTotal;
                changeDisplay.innerHTML = "Change: $" + change.toFixed(2);
                changeDisplay.style.display = "block";
            } else {
                changeDisplay.innerHTML = "Not enough cash given.";
                changeDisplay.style.display = "block";
            }
        }
    </script><?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Ensure required fields are present
        if (!isset($_POST['cd_id'], $_POST['quantity'], $_POST['cust_phone_num'])) {
            throw new Exception("Required fields are missing.");
        }

        // Initialize variables from POST data
        $cdIds = $_POST['cd_id'];
        $quantities = $_POST['quantity'];
        $totalAmounts = $_POST['total_amount'];
        $purchaseDate = $_POST['purchase_date'];
        $paymentMode = $_POST['payment_mode'];
        $customerPhone = $_POST['cust_phone_num'];
        $cashGiven = isset($_POST['cash_given']) ? $_POST['cash_given'] : 0;

        // Initialize total sales, profit, and loss calculations
        $grandTotal = 0;
        $totalProfit = 0;
        $totalLoss = 0;

        // Start a transaction to ensure all operations complete successfully
        $pdo->beginTransaction();

        foreach ($cdIds as $index => $cdId) {
            $quantity = (int)$quantities[$index];
            $totalAmount = (float)$totalAmounts[$index];
            $grandTotal += $totalAmount;

            // Assume profit is 20% and loss is 10% of each item's total amount
            $profit = $totalAmount * 0.20;
            $loss = $totalAmount * 0.10;
            $totalProfit += $profit;
            $totalLoss += $loss;

            // Insert each CD purchase item into the purchases table
            $stmt = $pdo->prepare("INSERT INTO purchases (cd_id, purchase_date, total_amount, quantity, payment_mode, cust_phone_num) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->execute([$cdId, $purchaseDate, $totalAmount, $quantity, $paymentMode, $customerPhone]);

            // Update the CD quantity
            $updateStmt = $pdo->prepare("UPDATE cds SET quantity = quantity - ? WHERE cd_id = ? AND quantity >= ?");
            if (!$updateStmt->execute([$quantity, $cdId, $quantity])) {
                throw new Exception("Failed to update quantity for CD ID: $cdId. Please check stock levels.");
            }
        }

        // Check if today's sales summary already exists
        $stmt = $pdo->prepare("SELECT 1 FROM sales WHERE purchase_date = ?");
        $stmt->execute([$purchaseDate]);

        if ($stmt->fetch()) {
            // Update existing record for today's sales summary
            $stmt = $pdo->prepare("UPDATE sales SET total_sales = total_sales + ?, total_profit = total_profit + ?, total_loss = total_loss + ? WHERE purchase_date = ?");
            $stmt->execute([$grandTotal, $totalProfit, $totalLoss, $purchaseDate]);
        } else {
            // Insert new record for today's sales summary
            $stmt = $pdo->prepare("INSERT INTO sales (purchase_date, total_sales, total_profit, total_loss) VALUES (?, ?, ?, ?)");
            $stmt->execute([$purchaseDate, $grandTotal, $totalProfit, $totalLoss]);
        }

        // Commit the transaction to save all changes
        $pdo->commit();

        // Success message for the user
        $message = "Thank you for your purchase! Your total amount is $" . number_format($grandTotal, 2) . ". Purchase Date: $purchaseDate.";
        echo "<p class='result'>Purchase recorded successfully!</p>";
        echo "<p class='result'>Customer Phone Number: $customerPhone</p>";
        echo "<p class='result'>$message</p>";

    } catch (PDOException $e) {
        // Rollback in case of a database error
        $pdo->rollBack();
        echo "<p class='result'>Error recording purchase: " . $e->getMessage() . "</p>";
    } catch (Exception $e) {
        // Rollback for any other exception
        $pdo->rollBack();
        echo "<p class='result'>Error: " . $e->getMessage() . "</p>";
    }
}
?>


</body>
</html>
