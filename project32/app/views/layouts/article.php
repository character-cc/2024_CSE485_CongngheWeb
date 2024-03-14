<?php include ("./views/search/search.php")?>
<div class="d-flex my-2 flex-wrap ">
    <?php foreach ($department_data as $row): ?>
    <div class="w-50 my-2">
    <div class="card m-2 h-100" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?php echo $row['Logo'] ?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 15px"><?php echo $row['DepartmentName'] ?></h5>
                    <p class="card-text">Email: <?php echo $row['Email'] ?></p>
                    <p class="card-text">Sđt: <?php echo $row['MobilePhone'] ?></p>
                    <p class="card-text">Địa chỉ: <small class="text-muted"><?php echo $row['Address'] ?></small></p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php endforeach;?>
</div>
