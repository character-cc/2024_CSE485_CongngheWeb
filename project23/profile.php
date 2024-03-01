<?php
session_start();
$users = [
    [
        'username' => 'KrytosVN',
        'password' => password_hash('123456', PASSWORD_DEFAULT), // Mã băm mật khẩu
        'name' => 'KrytosVN',
        'email' => 'KrytosVN@gmail.com'
    ],
    [
        'username' => 'user2',
        'password' => password_hash('password2', PASSWORD_DEFAULT), // Mã băm mật khẩu
        'name' => 'User Two',
        'email' => 'user2@example.com'
    ]
];
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
    // ... display other user details
} else {
    echo "Error: User not found.";
}
?>
<form action="logout.php" method="post">
<button  type="submit">Đăng Xuất</button>
</form>