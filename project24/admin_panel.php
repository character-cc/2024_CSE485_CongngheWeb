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
</head>

<body>
<?php
$users = [
    [
        "username" => "johndoe",
        "password" => password_hash("password123", PASSWORD_DEFAULT),
        "name" => "John Doe",
        "email" => "johndoe@example.com",
        "role" => "user"
    ],
    [
        "username" => "character",
        "password" => password_hash("password456", PASSWORD_DEFAULT),
        "name" => "character",
        "email" => "character@example.com",
        "role" => "admin"
    ],

];
$authorization_levels = [
    "user" => [
        "access_profile" => true,
        "edit_profile" => true,
        "access_admin_panel" => false,
    ],
    "admin" => [
        "access_profile" => true,
        "edit_profile" => true,
        "access_admin_panel" => true,
        "manage_users" => true,
    ],
];
session_start();
if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in']) ||
    $_SESSION['user_role'] !== "admin") {
    header('Location: login.php');
}
// ... display admin panel content
// List users (implement pagination or filtering if needed)
?>
<div class="container mt-3">
    <h2>Edit User</h2>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Username</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
      <?php  foreach ($users as $u) : ?>
        <tr>
            <td> <?php echo $u['username'] ?></td>
            <td> <?php echo $u['name'] ?></td>
            <td> <?php echo $u['email'] ?></td>
            <td> <?php echo $u['role'] ?></td>
            <td><?php
                  if ($u['username'] !== $_SESSION['user_id']) { // Prevent self-editing
                      echo "<a href='edit_user.php?username=" . $u['username'] . "'>Edit</a>";
                  }
                ?></td>
        </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>
</body>
</html>