<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Failed</title>
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
        .cross {
            width: 100px;
            height: 100px;
            position: relative;
            display: inline-block;
        }
        .cross::before,
        .cross::after {
            content: "";
            position: absolute;
            width: 10px;
            height: 100px;
            background-color: #f44336;
            left: 50%;
            top: 0;
            transform: translateX(-50%) rotate(45deg);
            animation: cross 0.4s ease-in-out forwards;
            opacity: 0;
        }
        .cross::after {
            transform: translateX(-50%) rotate(-45deg);
            animation-delay: 0.2s;
        }
        @keyframes cross {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
        h1 {
            margin-top: 20px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="cross"></div>
        <h1>Password didn't match!</h1>
    </div>
</body>
</html>
