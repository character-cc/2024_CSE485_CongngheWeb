<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Information Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> <!-- Liên kết với thư viện FontAwesome -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- CSS Files -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/services/service-6/assets/css/service-6.css" />
    <script type="text/javascript" src="./tinymce/tinymce.min.js"></script>
</head>
<body>
<?php
$products = [
    [
        "image" => "images/cat.jpg",
        "name" => "Cat",
        "price" => 15.99,
        "description" => "A comfortable and stylish T-Shirt."
    ],
    [
        "image" => "images/cat.jpg",
        "name" => "Cat",
        "price" => 15.99,
        "description" => "A comfortable and stylish T-Shirt."
    ],    [
        "image" => "images/cat.jpg",
        "name" => "Cat",
        "price" => 15.99,
        "description" => "A comfortable and stylish T-Shirt."
    ],    [
        "image" => "images/cat.jpg",
        "name" => "Cat",
        "price" => 15.99,
        "description" => "A comfortable and stylish T-Shirt."
    ],    [
        "image" => "images/cat.jpg",
        "name" => "Cat",
        "price" => 15.99,
        "description" => "A comfortable and stylish T-Shirt."
    ],    [
        "image" => "images/cat.jpg",
        "name" => "Cat",
        "price" => 15.99,
        "description" => "A comfortable and stylish T-Shirt."
    ],
    [
        "image" => "images/cat.jpg",
        "name" => "Cat",
        "price" => 15.99,
        "description" => "A comfortable and stylish T-Shirt."
    ],[
        "image" => "images/cat.jpg",
        "name" => "Cat",
        "price" => 15.99,
        "description" => "A comfortable and stylish T-Shirt."
    ],[
        "image" => "images/cat.jpg",
        "name" => "Cat",
        "price" => 15.99,
        "description" => "A comfortable and stylish T-Shirt."
    ],[
        "image" => "images/cat.jpg",
        "name" => "Cat",
        "price" => 15.99,
        "description" => "A comfortable and stylish T-Shirt."
    ],
    [
        "image" => "images/cat.jpg",
        "name" => "Cat",
        "price" => 15.99,
        "description" => "A comfortable and stylish T-Shirt."
    ],[
        "image" => "images/cat.jpg",
        "name" => "Cat",
        "price" => 15.99,
        "description" => "A comfortable and stylish T-Shirt."
    ],
];
 $itemsPerPage = 4;
 $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
 $currentPageItems =
    array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
$totalPages = ceil(count($products) / $itemsPerPage);


?>
<!-- Service 6 - Bootstrap Brain Component -->
<section class="bsb-service-6 py-5 py-xl-8 border border-primary">
    <div class="container overflow-hidden">
        <div class="row gy-4 gy-md-0 gx-xxl-5">
            <?php foreach ($currentPageItems as $product): ?>
            <div class="card m-1" style="width: 23%">
                <img class="card-img-top" src="<?php echo $product['image']?>" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $product['name']?></h4>
                    <p class="card-text"> <?php echo $product['description']?></p>
                    <a href="#" class="btn btn-primary"><?php echo $product['price']?></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <ul class="pagination">
            <?php if($currentPage > 1): ?>
                <li class="page-item"><a class="page-link" href=?page=<?php echo $currentPage - 1; ?>">Previous</a></li>
            <?php endif;?>
            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <?php if ($i == $currentPage): ?>
                    <li class="page-item active"><a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php else: ?>
                    <li class="page-item"><a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>                <?php endif; ?>
            <?php endfor; ?>

            <?php if ($currentPage < $totalPages): ?>
                <li class="page-item"><a class="page-link" href="?page=<?php echo $currentPage + 1; ?>">Next</a></li>
            <?php endif; ?>
        </ul>
    </div>
</section>

</body>
</html>

