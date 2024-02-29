<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Danh Sách Sản Phẩm</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <style>
        html,body{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .Main-body{
            margin: auto;
            display: inline-block;
            width: auto;

        }
        .Main-body h2{
            margin-left: 130px;
            border-left:5px solid red;
            padding-left: 10px;
        }
        .courses{
            width: 70%;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin: auto;

        }
        .course{
            flex-basis: 30%;
            margin: 10px;
            text-align: justify;
        }

        @media only screen and (max-width: 46.1875em) {
        .courses{
            display: flex;
            flex-direction: column;
        }
        }

        @media only screen and (min-width: 46.25em) and (max-width: 63.9375em){
        display: flex;
        flex-direction: row;
        }
    </style>
</head>
<body>
<?php
$courses = [
    [
        'img' => '<img src="Picture/2024-02-23%20134834.png" alt="Pic1">',
        'title' => 'LẬP TRÌNH VIÊN QUỐC TẾ',
        'description' => 'Chương trình đào tạo chất lượng cao về tin học và tiếng Anh.',
        'price' => '15.000.000 VND',
        'start' =>'2/2024',
        'duration' => '2 - 2.5 năm'
    ],
    [
        'img' => '<img src="Picture/WebDev.png" alt="Pic2">',
        'title' => 'LẬP TRÌNH WEB FULLSTACK',
        'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc người chuyển nghề. Trang bị từ frontend đến backend, xây dựng website hoàn chỉnh sau khóa học.',
        'price' => 'Ưu đãi giảm 15% học phí',
        'start' =>'2/2024',
        'duration' => '6 tháng'
    ],
    [
        'img' => '<img src="Picture/2024-02-23%20134856.png" alt="Pic3">',
        'title' => 'LẬP TRÌNH JAVA FULLSTACK',
        'description' => 'Phát triển ứng dụng web từ cơ bản đến nâng cao bằng Java, các ứng dụng doanh nghiệp sử dụng J2EE, Servlet, JSP, Spring Framework, EJB,...',
        'price' => 'Ưu đãi giảm 15% học phí',
        'start' =>'2/2024',
        'duration' => '236 giờ'
    ],
    [
        'img' => '<img src="Picture/2024-02-23%20134923.png" alt="Pic4">',
        'title' => 'LẬP TRÌNH PHP & lARAVEL',
        'description' => 'PHP là một trong các ngôn ngữ thiết kế web mạnh nhất. Khóa học trang bị kỹ năng xây dựng web hoàn chỉnh sử dụng PHP kết hợp Laravel Framework.',
        'price' => '9.600.000 VND',
        'start' =>'5/2/2024',
        'duration' => '36 giờ'
    ],
    [
        'img' => '<img src="Picture/2024-02-23%20134941.png" alt="Pic5">',
        'title' => 'KHOA HỌC LẬP TRÌNH .NET',
        'description' => 'Phát triển ứng dụng web sử dụng nền tảng ASP.NET Core MVC. Để học tốt khóa học yêu cầu học viên đã có kiến thức C# và Frontend.',
        'price' => '6.000.000 VND',
        'start' =>'2/2024',
        'duration' => '40 giờ'
    ],
    [
        'img' => '<img src="Picture/2024-02-23%20134953.png" alt="Pic6">',
        'title' => 'LẬP TRÌNH SQL SERVER',
        'description' => 'Trang bị những kiến thức nền tảng vững chắc về SQL Server như các kỹ thuật: lọc dữ liệu, phân tích, thiết kế và quản trị cơ sở dữ liệu,...',
        'price' => '4.500.000 VND',
        'start' =>'2/2024',
        'duration' => '30 giờ'
    ],

];
echo '<div class="Main-body">';
echo '<h2 style="color: red">KHÓA HỌC SẮP KHAI GIẢNG</h2>';
    echo '<div class="courses">';
        foreach ($courses as $course) {
            echo "<div class='course'>";
            echo "{$course['img']}";
            echo "<h4>{$course['title']}</h4>";
            echo "<p>{$course['description']}</p>";
            echo "<p>Giá: {$course['price']}</p>";
            echo "<p>Khai giảng: {$course['start']}</p>";
            echo "<p>Thời lượng: {$course['duration']}</p>";
            echo "</div>";
        }
    echo '</div>';
echo '</div>';
?>


</body>
</html>
