<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Expenses</title>
    <link rel="stylesheet" href="../assets/css/style_add_expense.css">
    <link rel="stylesheet" href="../assets/css/sidebar.css">
    

</head>
<body>

    <div class="contain">
        <div class="section">
            
            <ul>
                <li><a href="../dashboard">Dashboard</a></li>
                <li><a href="index.php">Expenses</a></li>
                <li><a href="../events/">Events</a></li>
            </ul>
        </div>

    <div class="event-expenses">
        <h1>Add Expense</h1>

        <!-- Event Name -->
        <label for="event-name">Event Name: </label>
        <input type="text" id="event-name" name="event-name" placeholder="Enter event name">

        <!-- Products Table -->
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Cost</th>
                </tr>
            </thead>
            <tbody id="product-table">
                <tr>
                    <td><input type="text" name="product1" placeholder="Product 1"></td>
                    <td><input type="number" name="cost1" class="cost" placeholder="0.00" oninput="calculateTotal()"></td>
                </tr>
                <tr>
                    <td><input type="text" name="product2" placeholder="Product 2"></td>
                    <td><input type="number" name="cost2" class="cost" placeholder="0.00" oninput="calculateTotal()"></td>
                </tr>
                <tr>
                    <td><input type="text" name="product3" placeholder="Product 3"></td>
                    <td><input type="number" name="cost3" class="cost" placeholder="0.00" oninput="calculateTotal()"></td>
                </tr>
            </tbody>
        </table>

        <!-- Total Cost -->
        <div class="total">
            <label>Total: </label>
            <span id="total-cost">0.00</span>
        </div>
        <button class="add">Add to Expenses</button>
    </div>
</div>

    <script src="../assets/scripts/scripting_expense.js"></script>
</body>
</html>