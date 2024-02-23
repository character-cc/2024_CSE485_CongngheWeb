
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Danh Sách Sản Phẩm</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <style>
        .navbar {
            background-color: #0a1f77;
            color: #fff;
            padding: 10px;
            text-align: start;
            position: absolute;
        }

        .navbar li {
            display: inline-block;
            padding: 0 10px 0 10px;
            border-right: 2px solid white;

        }

        .navbar li:last-child {
            border-right: none;
        }

    </style>
</head>
<body>
<?php
$navbarItems = [
    "GIỚI THIỆU",
    "TIN TỨC & THÔNG BÁO",
    "TUYỂN SINH",
    "ĐÀO TẠO",
    "NGHIÊN CỨU",
    "ĐỐI NGOẠI",
    "VĂN BẢN",
    "SINH VIÊN",
    "LIÊN HỆ"
];

echo '<ul class="navbar">';
echo '<li><i class="fa-solid fa-house"></i></li>';
foreach ($navbarItems as $item) {
    echo "<li>$item</li>";
}
echo '</ul>';
?>
</body>
</html>