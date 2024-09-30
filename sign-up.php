<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Expense Management System</title>
    <link rel="stylesheet" href="assets/css/sign.css">
</head>
<body>
    <div class="sign-up-container">
        <h2>Sign Up</h2>
        <form action="signupcode.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>

            <button type="submit" name="btn_signup">Sign Up</button>
        </form>
    </div>
</body>
</html>
