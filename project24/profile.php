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
if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])) {
    header('Location: login.php');
}
$username = $_SESSION['user_id'];
$user = null;
// Retrieve user data based on username (use prepared statements in real DB)
foreach ($users as $u) {
    if ($u['username'] === $username) {
        $user = $u;
        break;
    }
}
if ($user) {
    // Display user information based on authorization level
    $user_role = $user['role'];
    echo "Welcome, " . $user['name'] . "!";
    echo "<br>Email: " . $user['email'];
//    if ($authorization_levels[$user_role]['edit_profile_basic']) {
//        echo "<br>Edit basic profile information (link)";
//    }
    if ($user_role === "admin" &&
        $authorization_levels[$user_role]['access_admin_panel']) {
        echo "<br><a href='admin_panel.php'>Admin Panel</a>";
    }
    echo "<br><a href='logout.php'>Log Out</a>";
    // ... display other information based on permissions
} else {
    echo "Error: User not found.";
}
?>
