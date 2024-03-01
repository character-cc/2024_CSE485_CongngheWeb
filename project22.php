<?php
$user = [
    "id" => 1,
    "name" => "John Doe",
    "email" => "johndoe@example.com",
    'avatar' =>'<img src="./images/OIP%20(1).jpg" alt="Avatar">',
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-top: 0;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="file"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="file"] {
            margin-bottom: 20px;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        img {
            width: 100px; /* Kích thước của ảnh */
            height: 100px;
            border-radius: 50%; /* Làm tròn ảnh */
            object-fit: cover; /* Đảm bảo ảnh không bị biến dạng */
        }
    </style>
</head>
<body>
<form action="upload_profile.php" method="post" enctype="multipart/form-data">
    <h2>Profile Information</h2>
    <label for="name">Name:</label>
    <input type="text" name="name" value="<?php echo $user['name']; ?>"
           required>
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" value="<?php echo $user['email']; ?>"
           disabled>
    <br>
    <label for="avatar">Avatar:</label>
    <?php echo $user['avatar']; ?>
    <br>
    <input type="file" name="avatar" accept="image/*">
    <br>
    <button type="submit">Update Profile</button>
</form>
</body>
</html>

