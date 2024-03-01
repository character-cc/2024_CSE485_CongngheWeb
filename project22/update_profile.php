<?php
$user = [
    "id" => 1,
    "name" => "John Doe",
    "email" => "johndoe@example.com",
    "avatar" => "uploads/default_avatar.png" // Initial avatar URL
];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    $user['name'] = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    // Xử lý upload ảnh đại diện
    $allowedExtensions = ['jpg', 'jpeg', 'png'];
    $maxSize = 1048576; // 1MB
    $targetDir = "uploads/"; // Thư mục lưu trữ ảnh
    if (!empty($_FILES['avatar']['tmp_name'])) {
        $fileInfo = pathinfo($_FILES['avatar']['name']);
        if (!in_array($fileInfo['extension'], $allowedExtensions)) {
            $errors[] = "Only JPG, JPEG, and PNG files are allowed.";
        } else if ($_FILES['avatar']['size'] > $maxSize) {
            $errors[] = "File size must be less than 1MB.";
        } else {
            $fileName = uniqid() . "." . $fileInfo['extension'];
            $targetFile = $targetDir . $fileName;
            if (move_uploaded_file($_FILES['avatar']['tmp_name'], $targetFile)) {
                $user['avatar'] = $targetFile; // Cập nhật URL ảnh đại diện trong mảng
            } else {
                $errors[] = "Failed to upload file.";
            }
        }
    }
    // Xử lý lỗi hoặc cập nhật profile
    if (empty($errors)) {
        // Cập nhật profile trong cơ sở dữ liệu hoặc lưu trữ vĩnh viễn (thay thế bằng logic của bạn)
        echo "<p class='success'>Profile updated successfully!</p>";
    } else {
        echo "<p class='error'>Errors:</p>";
        foreach ($errors as $error) {
            echo "<p class='error'>- $error</p>";
        }
    }
}
?>