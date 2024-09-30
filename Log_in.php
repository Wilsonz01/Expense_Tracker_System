<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIT Expense Management System - Log In</title>
    <link rel="stylesheet" href="assets/css/styleme.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="lit logo.jpg" alt="Logo" class="logo">
            <h1>League of Information Technology (LIT)<br>Expense Tracker System</h1>
        </div>
        <div class="login-box">
            <h2>Log In</h2>
            <form action="logincode.php" method="post">
                <div class="input-group">
                    <label for="username">Username*</label>
                    <input type="text" id="username" name="username" required placeholder="Enter your username">
                </div>
                <div class="input-group">
                    <label for="password">Password*</label>
                    <input type="password" id="password" name="password" required placeholder="Enter your password">
                    
                </div>
                <div class="input-group">
                    <input type="checkbox" id="remember-me" name="remember-me">
                    <label for="remember-me">Remember Me</label>
                </div>
                <div class="input-group">
                    <button type="submit"> Log In</button>
                </div>
                <div class="links">
                    <a href="forgotpassword.php">Forgot password?</a>
                    <a href="sign-up.php">Doesn't have an account? Sign Up</a>
                </div>
            </form>
        </div>
    </div>
   
</body>
</html>