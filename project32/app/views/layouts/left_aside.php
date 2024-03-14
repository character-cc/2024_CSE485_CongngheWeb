<div class="d-flex m-1 mt-0">
    <div class="card w-100">
        <h5 class="card-header text-center">Tin tức</h5>
        <div class="card-body">
             <?php foreach ($news_data as $row):?>
                 <p class="card-text m-1" style="border-bottom: 1px solid black"><a href="#" style="text-decoration: none"><?php echo $row['title'] ;?> </a> </p>
            <?php endforeach;?>
        </div>
    </div>
</div>