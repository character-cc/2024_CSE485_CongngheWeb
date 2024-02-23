<!-- courses.php -->
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
        h1{
            color: red;
            border-left: 7px solid red;
            margin-top: 40px ;
            margin-bottom: 70px;
            padding-left: 20px;
        }
        .container{
            padding: 0;
        }

        .course {
            padding: 10px;
            margin-bottom: 20px;
        }

        .course h2 {
            color: #333;
        }

        .course p {
            color: #666;
        }
    </style>
</head>
<body>

<?php
// Dữ liệu khóa học lưu động trong mảng
$courses = [
    [
        'linkimg' => 'https://aptech.vn/wp-content/uploads/2023/10/banner-web.png',
        'title' => 'LẬP TRÌNH VIÊN QUỐC TẾ',
        'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2024',
        'duration' => '2 - 2.5 năm'
    ],
    [
        'linkimg' => 'https://aptech.vn/wp-content/uploads/2021/05/Lap-trinh-web-voi-php.png.webp',
        'title' => 'LẬP TRÌNH WEB FULLSTACK',
        'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc người chuyển nghề
        . Trang bị từ frontend đến backend, xây dựng website hoàn chỉnh sau khóa học.',
        'fee' => 'Ưu đãi giảm 15% học phí',
        'start_date' => '2/2024',
        'duration' => '6 tháng'
    ],
    [
        'linkimg' => 'https://aptech.vn/wp-content/uploads/2021/05/lap-trinh-java.png',
        'title' => 'LẬP TRÌNH JAVA FULLSTACK',
        'description' => 'Phát triển ứng dụng web từ cơ bản đến nâng cao bằng Java, các ứng dụng doanh nghiệp sử dụng J2EE, Servlet,JSP,Spring,Framework,EJB,...',
        'fee' => 'Ưu đãi giảm 15% học phí',
        'start_date' => '2/2024',
        'duration' => '236 giờ'
    ],
    [
        'linkimg' => 'https://aptech.vn/wp-content/uploads/2021/05/lap-trinh-php.png',
        'title' => 'LẬP TRÌNH PHP & LARAVEL',
        'description' => 'PHP là một trong các ngôn ngữ thiết kế web mạnh nhất.
        Khóa học trang bị kĩ năng xây dựng web hoàn chỉnh sử dụng PHP kết hợp Laravel Framework.',
        'fee' => '9.600.000 VND',
        'start_date' => '5/2/2024',
        'duration' => '36 giờ'
    ],
    [
        'linkimg' => 'https://aptech.fpt.edu.vn/wp-content/uploads/2022/06/hoc-lap-trinh-.net_.png',
        'title' => 'KHÓA HỌC LẬP TRÌNH .NET',
        'description' => 'Phát triển ứng dụng web sử dụng nền tảng ASP.NET Core MVC. 
        Để học tốt khóa học yêu cầu học viên đã có kiến thức C# và Frontend.',
        'fee' => '6.000.000 VND',
        'start_date' => '2/2024',
        'duration' => '40 giờ'
    ],
    [
        'linkimg' => 'https://aptech.vn/wp-content/uploads/2021/06/lap-trinh-csdl-voi-sql.png.webp',
        'title' => 'LẬP TRÌNH SQL SERVER',
        'description' => 'Trang bị những kiến thức nền tảng vững chắc về SQL Server như các kỹ thuật: 
        lọc dữ liệu, phân tích, thiết kế và quản trị cơ sở dữ liệu,...',
        'fee' => '4.500.000 VND',
        'start_date' => '2/2024',
        'duration' => '30 giờ'
    ],
    // Thêm các khóa học khác vào đây
];
echo '<div class="container"> <h1 class="title">KHÓA HỌC SẮP KHAI GIẢNG</h1><div class="row row-cols-3">';
foreach ($courses as $course) {
    echo '<div class="col course">';
    echo '<img src="' . $course['linkimg'] . '" class="img-fluid">';
    echo '<h4>' . $course['title'] . '</h4>';
    echo '<p>' . $course['description'] . '</p>';
    echo '<p><i class="fa-solid fa-gift " style="color: brown;"></i> Học phí: ' . $course['fee'] . '</p>';
    echo '<p><i class="fa-solid fa-clock" style="color: brown;"></i> Khải giảng: ' . $course['start_date'] . '</p>';
    echo '<p><i class="fa-solid fa-bookmark" style="color: brown;"></i> Thời lượng: ' . $course['duration'] . '</p>';
    echo '</div>';
}
echo '</div></div>';
?>
</body>
</html>


