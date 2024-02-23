<!DOCTYPE html>
<html lang="en">
<head>
    <title>Project12</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <style>
        .custom{
            background-color: darkblue;

        }
        ul {
            border: 10px solid transparent;
        }
        .nav-link{
            color: aliceblue;
            border-right: 1px solid white;
            padding-top: 0;
            padding-bottom: 0;
        }
        .nav-link:last-child a{
            border-right: none;
        }

    </style>
</head>
<body>

</body>
</html>
<?php
$navItems = [
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
echo '<nav class="custom"><ul class="nav justify-content-center">';
echo "<li class='nav-item'><a class='nav-link' href='#'><i class='fa-solid fa-house'></i></a></li>";
foreach ($navItems as $item) {
    echo "<li class='nav-item'><a class='nav-link' href='#'>$item</a></li>";
}
echo '</ul></nav>';
?>