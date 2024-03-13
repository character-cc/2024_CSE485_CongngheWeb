<?php
$itemsPerPage = 8;
$currentPage = $variable1;
if(empty($variable1)) $currentPage = 1;
$totalPages = ceil(count($data) / $itemsPerPage);
$DepartmentItems = array_slice($data, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
$cnt = 1;
include ("./views/layouts/header.php");
?>
<nav>
    <div class="container p-5">
        <div class="row w-75">
        <?php include ("./views/search/search.php")?>
        </div>
        <h1 class="my-2 text-primary">Kết quả tìm kiếm :</h1>
        <div class="d-flex flex-wrap align-items-stretch">
            <?php foreach ($DepartmentItems as $row): ?>
                <div class="w-25">
                    <div class="card m-2" style="height: 98%">
                        <div class="card-img-top"><img src="<?php if(isset($row['Avatar'])) echo $row['Avatar']; else echo $row['Logo']; ?>" class="w-100"></div>
                        <div class="card-body m-2">
                            <div class="p-1">Name: <?php if(isset($row['FullName'])) echo $row['FullName']; else echo $row['DepartmentName']; ?></div>
                            <div class="p-1">Email: <?php echo $row['Email'] ?></div>
                            <div class="p-1">PhoneNumber: <?php echo $row['MobilePhone'] ?></div>
                            <button type="button" class="btn btn-primary mt-2" >View Profile</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <ul class="pagination m-2">
            <?php if ($currentPage > 1): ?>
                <li class="page-item">
                    <a href="./index.php?controller=search&action=search&variable1=<?php echo $currentPage - 1?>" class="page-link">Previous</a>
                </li>
            <?php endif; ?>
            <?php for ($i = 1; $i <= $totalPages; $i++):
                if ($i != $currentPage): ?>
                    <li class="page-item">
                        <a href="./index.php?controller=search&action=search&variable1=<?php echo $i?>" class="page-link"><?php echo $i?></a>
                    </li>
                <?php else: ?>
                    <li class="page-item active">
                        <a href="./index.php?controller=search&action=search&variable1=<?php echo $i?>" class="page-link active"><?php echo $i?></a>
                    </li>
                <?php endif;
            endfor; ?>
            <?php if ($currentPage < $totalPages): ?>
                <li class="page-item">
                    <a href="./index.php?controller=search&action=search&variable1=<?php echo $currentPage + 1?>" class="page-link">Next</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
