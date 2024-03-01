<!-- courses.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Project21</title>
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
        .pagination .page-link {
            color: black; /* Chuyển màu chữ của các liên kết thành màu đen */
        }

        .pagination .page-item.active .page-link {
            background-color: black;
            border-color: black;
            color: white; /* Đổi màu chữ của liên kết active thành màu trắng để nổi bật trên nền đen */
        }

        .col.course {
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Áp dụng hiệu ứng đổ bóng */
            padding: 15px; /* Tăng khoảng cách giữa đổ bóng và nội dung bên trong */
        }
    </style>
</head>
<body>
<?php
$products = [
    [
        "id" => 1,
        "name" => "Áo sơ mi nam",
        "price" => 29.99,
        "description" => "Áo sơ mi nam kiểu dáng thời trang phong cách.",
        "link" => "./uploads/ig.png"
    ],
    [
        "id" => 2,
        "name" => "Quần dài nữ",
        "price" => 34.50,
        "description" => "Quần dài nữ chất liệu thoáng mát, phù hợp cho mọi dịp.",
        "link" => "./uploads/ig.png"
    ],
    [
        "id" => 3,
        "name" => "Áo khoác đông nam",
        "price" => 49.99,
        "description" => "Áo khoác đông nam chất liệu chống nước, giữ ấm hiệu quả.",
        "link" => "./uploads/ig.png"
    ],
    [
        "id" => 4,
        "name" => "Đầm dạ hội",
        "price" => 89.99,
        "description" => "Đầm dạ hội sang trọng, phù hợp cho các dịp quan trọng.",
        "link" => "./uploads/ig.png"
    ],
    [
        "id" => 5,
        "name" => "Áo thun trắng",
        "price" => 14.99,
        "description" => "Áo thun trắng dễ phối đồ, phong cách và thoải mái.",
        "link" => "./uploads/ig.png"
    ],
    [
        "id" => 6,
        "name" => "Quần jeans nữ",
        "price" => 39.99,
        "description" => "Quần jeans nữ phong cách, thời trang và dễ phối đồ.",
        "link" => "./uploads/ig.png"
    ],
    [
        "id" => 7,
        "name" => "Balo học sinh",
        "price" => 24.99,
        "description" => "Balo học sinh thoải mái, chất lượng đảm bảo.",
        "link" => "./uploads/ig.png"
    ],
    [
        "id" => 8,
        "name" => "Áo khoác nữ",
        "price" => 54.99,
        "description" => "Áo khoác nữ thiết kế thời trang, chất liệu cao cấp.",
        "link" => "./uploads/ig.png"
    ],
    [
        "id" => 9,
        "name" => "Áo len nam",
        "price" => 44.99,
        "description" => "Áo len nam phong cách, ấm áp cho mùa đông.",
        "link" => "./uploads/ig.png"
    ],
    [
        "id" => 10,
        "name" => "Váy dài nữ",
        "price" => 29.50,
        "description" => "Váy dài nữ phong cách, dễ dàng kết hợp với các phụ kiện.",
        "link" => "./uploads/ig.png"
    ],
    [
        "id" => 11,
        "name" => "Áo khoác da nam",
        "price" => 79.99,
        "description" => "Áo khoác da nam chất liệu cao cấp, phong cách lịch lãm.",
        "link" => "./uploads/ig.png"
    ],
    [
        "id" => 12,
        "name" => "Quần shorts nữ",
        "price" => 19.50,
        "description" => "Quần shorts nữ phù hợp cho mùa hè, dễ dàng vận động.",
        "link" => "./uploads/ig.png"
    ]
    // ... add more products

];

$itemsPerPage = 3; // Define the number of items per page
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1; // Get the current page from the URL, default to 1 if not set

$totalPages = ceil(count($products) / $itemsPerPage); // Calculate total number of pages
$currentPageItems = array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage); // Get the products for the current page
?>

<div class="container mt-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 ">
        <?php foreach ($currentPageItems as $product): ?>
            <div class="col course">
                <img src="<?php echo $product['link'];?>" class="img-fluid">
                <h4><?php echo $product['name']; ?></h4>
                <p>$<?php echo $product['price']; ?></p>
                <p><?php echo $product['description']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <nav aria-label="Page navigation example ">
        <ul class="pagination justify-content-center mt-4 ">
            <?php if ($currentPage > 1): ?>
                <li class="page-item "><a class="page-link" href="?page=<?php echo $currentPage - 1; ?>" >Previous</a></li>
            <?php endif; ?>
            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <li class="page-item <?php if ($i == $currentPage) echo 'active'; ?>"><a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php endfor; ?>
            <?php if ($currentPage < $totalPages): ?>
                <li class="page-item "><a class="page-link" href="?page=<?php echo $currentPage + 1; ?>">Next</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</div>

</body>
</html>
