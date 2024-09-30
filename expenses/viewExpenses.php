<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Expenses</title>
    <link rel="stylesheet" href="../assets/css/sidebar.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: skyblue;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            margin: auto;
            width: 20%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
<div class="contain">
        <div class="section">
            
            <ul>
                <li><a href="../dashboard">Dashboard</a></li>
                <li><a href="../expenses/index.php">Expenses</a></li>
                <li><a href="../events/">Events</a></li>
            </ul>
        </div>


    
    <table>
        <thead>
            <tr>
                <th>Description</th>
                <th>Amount ($)</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Venue Rental</td>
                <td>500.00</td>
                <td>2024-09-01</td>
            </tr>
            <tr>
                <td>Catering</td>
                <td>300.00</td>
                <td>2024-09-01</td>
            </tr>
            <tr>
                <td>Decorations</td>
                <td>150.00</td>
                <td>2024-09-02</td>
            </tr>
            <tr>
                <td>Entertainment</td>
                <td>400.00</td>
                <td>2024-09-03</td>
            </tr>
            <tr>
                <td>Marketing Materials</td>
                <td>200.00</td>
                <td>2024-09-04</td>
            </tr>
            <tr>
                <td>Miscellaneous</td>
                <td>75.00</td>
                <td>2024-09-05</td>
            </tr>
        </tbody>
    </table>

</body>
</html>
