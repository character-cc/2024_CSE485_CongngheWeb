<?php
include 'userdata.php';
session_start();
if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])) {
    header('Location: login.php'); // Chuyển hướng đến trang đăng nhập nếu chưa xác thực
    exit(); // Dừng kịch bản sau khi chuyển hướng
}
$username = $_SESSION['user_id'];
// Lấy dữ liệu người dùng từ mảng sử dụng tên người dùng
$user = null;
foreach ($users as $u) {
    if ($u['username'] === $username) {
        $user = $u;
        break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
<h1>Thông tin người dùng</h1>
<?php if ($user): ?>
    <p>Welcome, <?php echo htmlspecialchars($user['name']); ?>!</p>
    <p>Email: <?php echo htmlspecialchars($user['email']); ?></p>
    <!-- Nút đăng xuất -->
    <form action="logout.php" method="post">
        <button type="submit">Đăng xuất</button>
    </form>
<?php else: ?>
    <p>Error: Người dùng không được tìm thấy.</p>
<?php endif; ?>
</body>
</html>
