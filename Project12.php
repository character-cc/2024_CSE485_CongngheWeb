<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        nav ul{
            padding : 5px;
            display: flex;
            background-color: #0a1f77;
            position: absolute;
        }

        nav ul li{
            padding: 10px;
            position: relative;
            display: flex;
            align-items: center;
            color:white;
            font-family: Arial;
        }

        nav ul li::after{
            content: ' ';
            position: absolute;
            top : 50%;
            right : 0;
            width: 1px;
            height: 60%;
            background-color: white;
            transform: translateY(-50%);
        }
        nav ul li:last-child::after {
            content: none;
        }


    </style>
</head>
<body>
<?php
$navItems = [
    '<i class="fa-solid fa-house"></i>',
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
echo '<nav><ul>';
foreach ($navItems as $item) {
    echo "<li>$item</li>";
}
echo '</ul></nav>';

?>
</body>
</html>
