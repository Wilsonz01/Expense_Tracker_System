<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include('initialize.php'); 
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Success</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }
        .container {
            text-align: center;
        }
        .checkmark {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #4CAF50;
            position: relative;
            display: inline-block;
        }
        .checkmark::after {
            content: "";
            position: absolute;
            left: 30%;
            top: 35%;
            width: 10px;
            height: 40px;
            background-color: white;
            transform: rotate(45deg);
            animation: check 0.4s ease-in-out forwards;
            opacity: 0;
        }
        .checkmark::before {
            content: "";
            position: absolute;
            left: 20%;
            top: 50%;
            width: 5px;
            height: 20px;
            background-color: white;
            transform: rotate(45deg);
            animation: check 0.4s ease-in-out forwards;
            opacity: 0;
            animation-delay: 0.2s;
        }
        @keyframes check {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
        h1 {
            margin-top: 20px;
            color: #333;
        }
        .login-button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
        .login-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="checkmark"></div>
        <h1>Sign-Up Successful!</h1>
        <a href="Log_in.php" class="login-button">Go to Login</a>
    </div>
</body>
</html>
