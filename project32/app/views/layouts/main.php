<?php
include __DIR__ . '/../../config/DB.php';
include __DIR__ . '/../../models/User.php';
global $conn;
include 'header.php';
$usersArray = User::getData($conn);
?>

<html>
<head>

</head>
<body>
<table class="table">
    <h1>Danh sách tài khoản</h1>
    <thead>
    <tr>
        <th>Số TT</th>
        <th>Tên đăng nhập</th>
        <th>Mã nhân viên</th>
        <th>Chi tiết</th>
    </tr>
    </thead>
    <tbody>
    <?php $index = 1; ?>
    <?php foreach ($usersArray as $user): ?>
        <tr>
            <td><?= $index++ ?></td>
            <td><?= $user->getUsername() ?></td>
            <td><?= $user->getEmployeeID() ?></td>
            <td><a href="./index.php?controller=Info&action=Infomation&ID=<?= $user->getEmployeeID() ?>">Chi tiết</a></td>
            <td><a href="./index.php?controller=Info&action=Change&ID=<?= $user->getEmployeeID() ?>">Chỉnh sửa</a></td>
            <td><a href="./index.php?controller=Info&action=Delete&ID=<?= $user->getEmployeeID() ?>">XóaTK</a></td>
        </tr>
    <?php endforeach; ?>
        <td><a href="./index.php?controller=Info&action=Add&Role=<?= $_SESSION['user_role']?>">Thêm Tài Khoản</a></td>
    </tbody>
</table>
</body>
</html>