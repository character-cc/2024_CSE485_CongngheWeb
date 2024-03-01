<?php
$user = [
    "id" => 1,
    "name" => "John Doe",
    "email" => "johndoe@example.com",
    "avatar" => "uploads/default_avatar.png" // Initial avatar URL
];

function sanitizeInput($input) {
    return htmlspecialchars(trim($input));
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and update user information

    $errors = [];
    $user['name'] = sanitizeInput($_POST['name']);
    // Handle avatar upload (similar to previous exercise)
    $allowedExtensions = ['jpg', 'jpeg', 'png'];
    $maxSize = 1048576; // 1MB
    $targetDir = "uploads/"; // Adjust directory path

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
                $user['avatar'] = $targetFile; // Update avatar URL in array
                echo "Profile updated successfully!";
            } else {
                $errors[] = "Failed to upload file. Check directory permissions.";
            }
        }
    }

    // Handle errors or update profile
    if (!empty($errors)) {
        echo "Errors:";
        foreach ($errors as $error) {
            echo "<br> - $error";
        }
    }
}
?>
