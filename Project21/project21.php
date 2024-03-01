<?php
$Items = [
    [
        "ID" => "1",
        "Image" => "IMG/41gGkBjThPL._AC_UL320_.jpg",
        "Title" => "Jabra Elite 8 Active - Best and Most Advanced Sports Wireless Bluetooth Earbuds",
        "Price" => "$199",
        "Description" => "US MILITARY GRADE FOR EXTREME DURABILITY Built for elite athletes, these earbuds meet US Military Standard for ruggedized electronics - passing 9 durability tests - and ultra-durable to protect against dust, water & sweat."
    ],
    [
        "ID" => "2",
        "Image" => "IMG/51O0iIuohnL._AC_UL320_.jpg",
        "Title" => "SAMSUNG Galaxy Buds 2 Pro True Wireless Bluetooth Earbuds, Noise Cancelling, Hi-Fi Sound, 360 Audio, Comfort Fit In Ear, HD Voice",
        "Price" => "$227",
        "Description" => "HANDS-FREE VOICE ASSISTANT Need to plot your running route on the move? Connect to your preferred Voice Assistant to get directions, find out the weather forecast or take a call without reaching for your phone."
    ],
    [
        "ID" => "3",
        "Image" => "IMG/41gGkBjThPL._AC_UL320_.jpg",
        "Title" => "Jabra Elite 8 Active - Best and Most Advanced Sports Wireless Bluetooth Earbuds",
        "Price" => "$199",
        "Description" => "US MILITARY GRADE FOR EXTREME DURABILITY Built for elite athletes, these earbuds meet US Military Standard for ruggedized electronics - passing 9 durability tests - and ultra-durable to protect against dust, water & sweat."
    ],
    [
        "ID" => "4",
        "Image" => "IMG/51O0iIuohnL._AC_UL320_.jpg",
        "Title" => "SAMSUNG Galaxy Buds 2 Pro True Wireless Bluetooth Earbuds, Noise Cancelling, Hi-Fi Sound, 360 Audio, Comfort Fit In Ear, HD Voice",
        "Price" => "$227",
        "Description" => "HANDS-FREE VOICE ASSISTANT Need to plot your running route on the move? Connect to your preferred Voice Assistant to get directions, find out the weather forecast or take a call without reaching for your phone."
    ],
    [
        "ID" => "5",
        "Image" => "IMG/41gGkBjThPL._AC_UL320_.jpg",
        "Title" => "Jabra Elite 8 Active - Best and Most Advanced Sports Wireless Bluetooth Earbuds",
        "Price" => "$199",
        "Description" => "US MILITARY GRADE FOR EXTREME DURABILITY Built for elite athletes, these earbuds meet US Military Standard for ruggedized electronics - passing 9 durability tests - and ultra-durable to protect against dust, water & sweat."
    ],
    [
        "ID" => "6",
        "Image" => "IMG/51O0iIuohnL._AC_UL320_.jpg",
        "Title" => "SAMSUNG Galaxy Buds 2 Pro True Wireless Bluetooth Earbuds, Noise Cancelling, Hi-Fi Sound, 360 Audio, Comfort Fit In Ear, HD Voice",
        "Price" => "$227",
        "Description" => "HANDS-FREE VOICE ASSISTANT Need to plot your running route on the move? Connect to your preferred Voice Assistant to get directions, find out the weather forecast or take a call without reaching for your phone."
    ],
    [
        "ID" => "7",
        "Image" => "IMG/41gGkBjThPL._AC_UL320_.jpg",
        "Title" => "Jabra Elite 8 Active - Best and Most Advanced Sports Wireless Bluetooth Earbuds",
        "Price" => "$199",
        "Description" => "US MILITARY GRADE FOR EXTREME DURABILITY Built for elite athletes, these earbuds meet US Military Standard for ruggedized electronics - passing 9 durability tests - and ultra-durable to protect against dust, water & sweat."
    ],
    [
        "ID" => "8",
        "Image" => "IMG/51O0iIuohnL._AC_UL320_.jpg",
        "Title" => "SAMSUNG Galaxy Buds 2 Pro True Wireless Bluetooth Earbuds, Noise Cancelling, Hi-Fi Sound, 360 Audio, Comfort Fit In Ear, HD Voice",
        "Price" => "$227",
        "Description" => "HANDS-FREE VOICE ASSISTANT Need to plot your running route on the move? Connect to your preferred Voice Assistant to get directions, find out the weather forecast or take a call without reaching for your phone."
    ],
];
$itemsPerPage = 4;
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$totalPages = ceil(count($Items) / $itemsPerPage);
$currentPageItems = array_slice($Items, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
?>
<html lang="en">
<head>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: center; /* Căn giữa theo chiều ngang */
            align-items: center; /* Căn giữa theo chiều dọc */
            gap: 20px;
        }

        .Items-List {
            display: flex;
            flex-wrap: wrap; /* Đảm bảo các mục con có thể xuống dòng nếu không đủ chỗ */
            justify-content: center; /* Căn giữa theo chiều ngang */
            gap: 20px; /* Khoảng cách giữa các mục */
        }

        .Item {
            display: flex;
            flex-direction: column;
            max-width: 300px;
            padding: 12px;
            border: #1a1a1a solid 1px;
        }

        .pagination a {
            padding: 12px;
            border: #1a1a1a solid 1px;
        }

        .pagination span {
            padding: 12px;
            border: #1a1a1a solid 1px;
        }
    </style>
</head>
<body>
<div class="Items-List ">
    <?php
    foreach ($currentPageItems as $item) {
        echo '<div class="Item">';
        echo "<img src='{$item["Image"]}'> ";
        echo "<h5>{$item["Title"]}</h5>";
        echo "<h3>{$item["Price"]}</h3>";
        echo "<p>{$item["Description"]}</p>";
        echo '</div>';
    }
    ?>
</div>
<div class="pagination">
    <?php if ($currentPage > 1): ?>
        <a href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
    <?php endif; ?>
    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <?php if ($i == $currentPage): ?>
            <span class="active"><?php echo $i; ?></span>
        <?php else: ?>
            <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>
    <?php if ($currentPage < $totalPages): ?>
        <a href="?page=<?php echo $currentPage + 1; ?>">Next</a>
    <?php endif; ?>
</div>
</body>
</html>
