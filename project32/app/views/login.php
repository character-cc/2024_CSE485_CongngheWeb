<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> <!-- Liên kết với thư viện FontAwesome -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/services/service-6/assets/css/service-6.css" />
    <link rel="stylesheet" href="../public/assets/css/login.css">

</head>
<body>
<script>
 <?php if(!empty($error)): ?>
            alert("Sai tài khoản hoặc mật khẩu");
<?php endif;?>
</script>
<div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
        <header>Login</header>
        <form action="./index.php?controller=login&action=checkUser" method="post">
            <input type="text" placeholder="Enter your email" name="username">
            <input type="password" placeholder="Enter your password" name="password">
            <a href="#">Forgot password?</a>
            <input type="submit" class="button" value="Login">
        </form>
        <div class="signup">
        <span class="signup">Don't have an account?
         <label for="check">Signup</label>
        </span>
        </div>
    </div>
    <div class="registration form">
        <header>Signup</header>
        <form action="#">
            <input type="text" placeholder="Enter your email">
            <input type="password" placeholder="Create a password">
            <input type="password" placeholder="Confirm your password">
            <input type="button" class="button" value="Signup">
        </form>
        <div class="signup">
        <span class="signup">Already have an account?
         <label for="check">Login</label>
        </span>
        </div>
    </div>
</div>
</body>
</html>
