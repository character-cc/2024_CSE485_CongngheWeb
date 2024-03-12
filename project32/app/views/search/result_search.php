<?php
$itemsPerPage = 2;
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$totalPages = ceil(  count($data['departments']) / $itemsPerPage);
echo $totalPages;
$DepartmentItems = array_slice($data['departments'], ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
?>
<nav>
    <div class="container ">
        <div class="d-flex flex-wrap flex-fill">
<!--            --><?php //if (count($data['employees']) / $itemsPerPage <= $currentPage):
//                $EmployeesItems = array_slice($data['employees'], ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
//                foreach ($EmployeesItems as $row): ?>
<!--                    <div class="w-25">-->
<!--                        <div class="card m-2">-->
<!--                            <div class="card-img-top"><img src="--><?php //echo $row['Avatar'] ?><!--" class="w-100"></div>-->
<!--                            <div class="card-body m-2">-->
<!--                                <div class="p-1">FullName: --><?php //echo $row['FullName'] ?><!--</div>-->
<!--                                <div class="p-1">Email: --><?php //echo $row['Email'] ?><!--</div>-->
<!--                                <div class="p-1">Position: --><?php //echo $row['Position'] ?><!--</div>-->
<!--                                <div class="p-1">PhoneNumber: --><?php //echo $row['MobilePhone'] ?><!--</div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                --><?php //endforeach;
//            endif;

//            if (count($data['employees'])  <= $currentPage):

                foreach ($DepartmentItems as $row): ?>
                    <div class="w-25">
                        <div class="card m-2">
                            <div class="card-img-top"><img src="<?php echo $row['Logo'] ?>" class="w-100"></div>
                            <div class="card-body m-2">
                                <div class="p-1">FullName: <?php echo $row['DepartmentName'] ?></div>
                                <div class="p-1">Email: <?php echo $row['Email'] ?></div>
                                <div class="p-1">Position: <?php echo $row['Address'] ?></div>
                                <div class="p-1">PhoneNumber: <?php echo $row['MobilePhone'] ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;
//            endif; ?>
        </div>

        <ul class="pagination">
            <?php if ($currentPage > 1): ?>
                <li class="page-item">
                    <a href="./index.php?controller=search&action=search&page= <?php echo $currentPage - 1?>" class="page-link">Previous</a>
                </li>
            <?php endif; ?>
            <?php for ($i = 1; $i <= $totalPages; $i++):
                if ($i != $currentPage): ?>
                    <li class="page-item">
                        <a href="./index.php?controller=search&action=search&page= <?php echo $i?>" class="page-link"><?php echo $i?></a>
                    </li>
                <?php else: ?>
                    <li class="page-item">
                        <a href="./index.php?controller=search&action=search&page= <?php echo $i?>" class="page-link"><?php echo $i?></a>
                    </li>
                <?php endif;
            endfor; ?>
            <?php if ($currentPage < $currentPage): ?>
                <li class="page-item">
                    <a href="./index.php?controller=search&action=search&page= <?php echo $currentPage + 1?>" class="page-link">Next</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
