<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: skyblue;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .forgot-password-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            height: 350px;
            text-align: center;
        }
        .forgot-password-container h2 {
            margin-top: 60px ;
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .forgot-password-container input[type="email"] {
            
            text-align: center;
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .forgot-password-container button {
            
            align-items: center;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .forgot-password-container button:hover {
            background-color: #0056b3;
        }
        .forgot-password-container p {
            margin-top: 15px;
        }
        .forgot-password-container a {
            color: #007bff;
            text-decoration: none;
        }
        .forgot-password-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="forgot-password-container">
        <h2>Forgot Password</h2>
        <form action="forgot_password_handler.php" method="post">
            <input type="email" name="email" placeholder="Enter your email address" required>
            <button type="submit">Send Reset Link</button>
        </form>
        <p><a href="Log_in.php">Back to Login</a></p>
    </div>

</body>
</html>
