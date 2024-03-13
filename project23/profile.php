<?php
$users = [
    [
        "username" => "johndoe",
        "password" => password_hash("password123", PASSWORD_DEFAULT), // Store hashedpassword
        "name" => "John Doe",
        "email" => "johndoe@example.com"
    ],
    [
        "username" => "character-cc",
        "password" => password_hash("password123", PASSWORD_DEFAULT), // Store hashedpassword
        "name" => "character",
        "email" => "charater@example.com"
    ],
];

session_start();
if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])) {
    header('Location: login.php'); // Redirect to login if not authenticated
}
$username = $_SESSION['user_id'];
// Retrieve user data from array using the username
$user = null;
foreach ($users as $u) {
    if ($u['username'] === $username) {
        $user = $u;
        break;
    }
}
if ($user) {
    // Display user information
    echo "Welcome, " . $user['name'] . "!";
    echo "<br>Email: " . $user['email'];

} else {
    echo "Error: Login not found.";
}

?>
<p><a href="logout.php" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Log Out</a></p>


