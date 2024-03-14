<div class="d-flex m-1 mt-0">
    <div class="card w-100">
        <h5 class="card-header text-center">Các Bộ Phận</h5>
        <div class="card-body">
            <?php foreach ($department_data as $row):?>
                <div class="row" style="border-bottom: 1px solid black;">
                    <p class="card-text m-1 p-2" style="font-weight: bold; font-size: 1.1em;">
                        <a href="#" style="text-decoration: none; color: blue;"><?php echo $row['DepartmentName']; ?></a>
                    </p>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
