<?php
session_start(); // Start session

$users = [
    [
        'username' => 'KrytosVN',
        'password' => password_hash('123456', PASSWORD_DEFAULT), // Mã băm mật khẩu
        'name' => 'User One',
        'email' => 'user1@example.com'
    ],
    [
        'username' => 'user2',
        'password' => password_hash('password2', PASSWORD_DEFAULT), // Mã băm mật khẩu
        'name' => 'User Two',
        'email' => 'user2@example.com'
    ]
];

$username = $_POST['username'];
$password = $_POST['password'];

// Kiểm tra xem tên người dùng có tồn tại không
$user = null;
foreach ($users as $u) {
    if ($u['username'] === $username) {
        $user = $u;
        break;
    }
}

if ($user && password_verify($password, $user['password'])) {
    // Đăng nhập thành công
    $_SESSION['user_id'] = $user['username']; // Lưu ID người dùng vào session
    setcookie('logged_in', true, time() + 60 * 60 * 24 * 30, "/"); // Đặt cookie trong 30 ngày
    header('Location: profile.php'); // Chuyển hướng đến trang hồ sơ
} else {
    // Đăng nhập không thành công
    echo "Tên người dùng hoặc mật khẩu không hợp lệ.";
}
?>


