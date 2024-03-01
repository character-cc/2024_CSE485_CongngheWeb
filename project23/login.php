<html>
<head>
    <style>
        html,body{
            display: flex;
            justify-content: center;
            text-align: center;
        }
        form{
            padding: 100px;
            background-color: #b1d0e6;
            max-height: 200px;
            border: 1px black solid;
            border-radius: 10px;
        }
        input{
            margin-bottom: 10px;
        }
        button{
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    <form action="process_login.php" method="post">
        Username: <input type="text" name="username" required>
        <br>
        Password: <input type="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
