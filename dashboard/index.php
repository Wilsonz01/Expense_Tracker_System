<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker Dashboard</title>
    <link rel="stylesheet" href="../assets/css/style_dashboard.css">
</head>
<body>
    <style>
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logout-button {
            background-color: #f44336; /* Red color */
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>
    
    <div class="dashboard">
        <div class="header">
        <h1>Welcome! Expense Tracker System</h1>
        <form action="../logincode.php" method="post">
        <button type="submit" class="logout-button" name="btn_logout">Log Out</button>
        </form>
        </div>
        
        <hr>
        
        <div class="container">
            <div class="section1">
                
                <ul>
                    <li><a href="../dashboard">Dashboard</a></li>
                    <li><a href="../expenses/">Expenses</a></li>
                    <li><a href="../expenses/add_expense.php">Add Expense</a></li>
                    <li><a href="events.php">Events</a></li>
                </ul>
            </div>
            
            <div class="section">
                <h2>Total Expense</h2>
                <div id="total-expense">5,000</div>
            </div>
            
            <div class="section">
                <h2>Current Year Expense</h2>
                <div id="year-expense">2,000</div>
            </div>
        </div>
    </div>

    <script src="../assets/script/scripting_dashboard.js"></script>
</body>
</html>