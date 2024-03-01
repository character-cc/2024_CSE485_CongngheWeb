<?php
$user = [
    "id" => 1,
    "name" => "John Doe",
    "email" => "johndoe@example.com",
    "avatar" => "uploads/" // Initial avatar URL
];
?>
<html>
    <head>
        <style>
            html,body{
                display: flex;
                justify-content: center;
            }
            form{
                padding: 10px;
                max-height: 500px;
                max-width: 1000px;
                border: #6d737b solid 1px;
                border-radius: 5px;
                background-color: #b1d0e6;
                text-align: center;
            }
            form input {
                margin: 10px;
            }
            form button{
                justify-content: center;
                padding: 10px 20px;
                border-radius: 5px;
            }
        </style>
    </head>
    <body>
        <form action="update_profile.php" method="post" enctype="multipart/form-data">
            <h2>Profile Information</h2>
            <label for="name">Name:</label>
            <input type="text" name="name" value="<?php echo $user['name']; ?>" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo $user['email']; ?>" disabled>
            <br>
            <label for="avatar">Avatar:</label>
            <input type="file" name="avatar" accept="image/*">
            <br>
            <button type="submit">Update Profile</button>
        </form>
    </body>

</html>