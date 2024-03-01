<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> <!-- Liên kết với thư viện FontAwesome -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/project13.css">
</head>

<body>
<?php
$courses = [
    [
        'img' =>'<img src="Picture/2024-02-23 134834.png" alt="Pic1">',
        'title' => 'LẬP TRÌNH VIÊN QUỐC TẾ',
        'description' => 'Chương trình đào tạo chất lượng cao về tin học và tiếng Anh.',
        'price' => '15.000.000 VND',
        'start' =>'2/2024',
        'duration' => '2 - 2.5 năm'
    ],
    [
        'img' =>'<img src="Picture/WebDev.png" alt="Pic2">',
        'title' => 'LẬP TRÌNH WEB FULLSTACK',
        'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc người chuyển nghề. Trang bị từ frontend đến backend, xây dựng website hoàn chỉnh sau khóa học.',
        'price' => 'Ưu đãi giảm 15% học phí',
        'start' =>'2/2024',
        'duration' => '6 tháng'
    ],
    [
        'img' =>'<img src="Picture/2024-02-23 134856.png" alt="Pic3">',
        'title' => 'LẬP TRÌNH JAVA FULLSTACK',
        'description' => 'Phát triển ứng dụng web từ cơ bản đến nâng cao bằng Java, các ứng dụng doanh nghiệp sử dụng J2EE, Servlet, JSP, Spring Framework, EJB,...',
        'price' => 'Ưu đãi giảm 15% học phí',
        'start' =>'2/2024',
        'duration' => '236 giờ'
    ],
    [
        'img' =>'<img src="Picture/2024-02-23 134923.png" alt="Pic4">',
        'title' => 'LẬP TRÌNH PHP & lARAVEL',
        'description' => 'PHP là một trong các ngôn ngữ thiết kế web mạnh nhất. Khóa học trang bị kỹ năng xây dựng web hoàn chỉnh sử dụng PHP kết hợp Laravel Framework.',
        'price' => '9.600.000 VND',
        'start' =>'5/2/2024',
        'duration' => '36 giờ'
    ],
    [
        'img' =>'<img src="Picture/2024-02-23 134941.png" alt="Pic5">',
        'title' => 'KHOA HỌC LẬP TRÌNH .NET',
        'description' => 'Phát triển ứng dụng web sử dụng nền tảng ASP.NET Core MVC. Để học tốt khóa học yêu cầu học viên đã có kiến thức C# và Frontend.',
        'price' => '6.000.000 VND',
        'start' =>'2/2024',
        'duration' => '40 giờ'
    ],
    [
        'img' =>'<img src="Picture/2024-02-23 134953.png" alt="Pic6">',
        'title' => 'LẬP TRÌNH SQL SERVER',
        'description' => 'Trang bị những kiến thức nền tảng vững chắc về SQL Server như các kỹ thuật: lọc dữ liệu, phân tích, thiết kế và quản trị cơ sở dữ liệu,...',
        'price' => '4.500.000 VND',
        'start' =>'2/2024',
        'duration' => '30 giờ'
    ],

];
?>
<h3 style="color: red; border-left: 3px solid red ;padding-left: 10px ">Khóa Học khai Giảng</h3>
<div class="flex-container">

    <?php
    foreach ($courses as $course) {
        echo "<div class='box box1'>";
        echo "{$course['img']}";
        echo "<h4>{$course['title']}</h4>";
        echo "<p>{$course['description']}</p>";
        echo "<p>Giá: {$course['price']}</p>";
        echo "<p>Khai giảng: {$course['start']}</p>";
        echo "<p>Thời lượng: {$course['duration']}</p>";
        echo "</div>";
    }
    ?>
</div>
</body>
</html>
