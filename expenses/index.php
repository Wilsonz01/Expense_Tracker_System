<!DOCTYPE html>
<html lang="en">
    <?php
     include ('../db_conn.php');
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monthly Expense Tracker</title>
    <link rel="stylesheet" href="../assets/css/style_expense.css">
    <link rel="stylesheet" href="../assets/css/sidebar.css">
</head>
<body>
    <div class="contain">
    <div class="section">
                
        <ul>
            <li><a href="../dashboard/">Dashboard</a></li>
            <li><a href="../expenses/index.php">Expenses</a></li>
            <li><a href="add_expense.php">Add Expense</a></li>
            <li><a href="../events">Events</a></li>
        </ul>
    </div>
    </div>
    <div class="monthly-expenses">
        <h1>Monthly Expenses</h1>
        <div class="container">
            <?php
             $sql1 = "SELECT sum(expenses) as totalexpenses FROM expenses where month ='january'";
             $result1 = $conn->query($sql1);
             if ($result1->num_rows > 0) {$expenses1 = $result1->fetch_assoc();} 
						 
             $sql2 = "SELECT sum(expenses) as totalexpenses FROM expenses where month ='february'";
             $result2 = $conn->query($sql2);
             if ($result2->num_rows > 0) {$expenses2 = $result2->fetch_assoc();} 

						 
             $sql3 = "SELECT sum(expenses) as totalexpenses FROM expenses where month ='March'";
             $result3 = $conn->query($sql3);
             if ($result3->num_rows > 0) {$expenses3 = $result3->fetch_assoc();} 


             $sql4 = "SELECT sum(expenses) as totalexpenses FROM expenses where month ='april'";
             $result4 = $conn->query($sql4);
             if ($result4->num_rows > 0) {$expenses4 = $result4->fetch_assoc();}
						 
						 
             $sql5 = "SELECT sum(expenses) as totalexpenses FROM expenses where month ='may'";
             $result5 = $conn->query($sql1);
             if ($result5->num_rows > 0) {$expenses5 = $result5->fetch_assoc();} 

						 
             $sql6 = "SELECT sum(expenses) as totalexpenses FROM expenses where month ='june'";
             $result6 = $conn->query($sql6);
             if ($result6->num_rows > 0) {$expenses6 = $result6->fetch_assoc();} 

             $sql7 = "SELECT sum(expenses) as totalexpenses FROM expenses where month ='july'";
             $result7 = $conn->query($sql7);
             if ($result7->num_rows > 0) {$expenses7 = $result7->fetch_assoc();}
						 
						 
             $sql8 = "SELECT sum(expenses) as totalexpenses FROM expenses where month ='august'";
             $result8 = $conn->query($sql8);
             if ($result8->num_rows > 0) {$expenses8 = $result8->fetch_assoc();} 

						 
             $sql9 = "SELECT sum(expenses) as totalexpenses FROM expenses where month ='september'";
             $result9 = $conn->query($sql9);
             if ($result9->num_rows > 0) {$expenses9 = $result9->fetch_assoc();} 

						 
             $sql10 = "SELECT sum(expenses) as totalexpenses FROM expenses where month ='october'";
             $result10 = $conn->query($sql10);
             if ($result10->num_rows > 0) {$expenses10 = $result10->fetch_assoc();} 

						 
             $sql11 = "SELECT sum(expenses) as totalexpenses FROM expenses where month ='november'";
             $result11 = $conn->query($sql11);
             if ($result11->num_rows > 0) {$expenses11 = $result11->fetch_assoc();} 

						 
             $sql12 = "SELECT sum(expenses) as totalexpenses FROM expenses where month ='december'";
             $result12 = $conn->query($sql12);
             if ($result12->num_rows > 0) {$expenses12 = $result12->fetch_assoc();} 

            $conn->close();
            ?>
           
        
        <div class="months-grid">
            <div class="month">January<br><span><?= $expenses1['totalexpenses']; ?></span></div>
            <div class="month">February<br><span><?= $expenses2['totalexpenses']; ?></span></div>
            <div class="month">March<br><span><?= $expenses3['totalexpenses'] ?></span></div>
            <div class="month">April<br><span><?= $expenses4['totalexpenses'] ?></span></div>
            <div class="month">May<br><span><?= $expenses5['totalexpenses'] ?></span></div>
            <div class="month">June<br><span><?= $expenses6['totalexpenses'] ?></span></div>
            <div class="month">July<br><span><?= $expenses7['totalexpenses'] ?></span></div>
            <div class="month">August<br><span><?= $expenses8['totalexpenses'] ?></span></div>
            <div class="month">September<br><span><?= $expenses9['totalexpenses'] ?></span></div>
            <div class="month">October<br><span><?= $expenses10['totalexpenses'] ?></span></div>
            <div class="month">November<br><span><?= $expenses11['totalexpenses'] ?></span></div>
            <div class="month">December<br><span><?= $expenses12['totalexpenses'] ?></span></div>
            
        </div>
    </div>
</body>
</html>