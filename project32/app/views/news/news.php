<!DOCTYPE html>
<html lang="en">
<head>
    <title>TLU</title>
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


</head>
<body>
<?php require_once APP.'/app/views/layouts/header.php' ?>
<div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="navbar-brand "  href="#" style="color: #3d509f;">TLU</a></li>
            <li class="breadcrumb-item" aria-current="page"><a class="navbar-brand " href="#" style="color: #ca373d;text-transform: uppercase; ">Tin tức & thông báo</a></li>
            <?php
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }

            $category = $_SESSION['category'];

            foreach ($xs as $x):
                if($category == $x->getCategoryID()) {?>

                    <li class="breadcrumb-item" aria-current="page"><a class="navbar-brand " href="#" style="color: #ca373d;text-transform: uppercase; "><?php echo $x->getCategoryName();?></a></li>

            <?php }endforeach; ?>

        </ol>
    </nav>
    <div class="d-flex ">
        <div class="" style="width: 25rem;margin-right: 1rem;">

            <ul class="list-group list-group-flush">

                <?php

                foreach ($xs as $x):
                    if($category == $x->getCategoryID()){


                ?>
                <li class="list-group-item" style="background-color: #ca373d;">
                    <a class="nav-link" style="color: #ffffff" aria-current="page" href="<?= DOMAIN.'index.php?controller=news&category='.$x->getCategoryID();?>" ><?php echo $x->getCategoryName(); ?></a>
                </li>
                <?php }else{?>
                        <li class="list-group-item"><a class="nav-link" style="color: black" aria-current="page" href="<?= DOMAIN.'index.php?controller=news&category='.$x->getCategoryID();?>"><?php echo $x->getCategoryName(); ?></a></li>
                        <?php

                    }
                endforeach; ?>


                <li class="list-group-item"></li>

            </ul>
        </div>
        <div class="container-fluid">

                    <?php
                    foreach ($es as $e):
                    if($category == $e->getCategoryID()) {?>
                        <div class="card mb-1" style="max-width: 100%;">
                        <div class="row g-0">
                        <div class="col-md-3 d-flex  align-items-center">
                            <img style="width: 12rem" src="<?php echo $e->getLinkImg(); ?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $e->getTitle(); ?></h5>
                                <p class="card-text"><small class="text-muted"><?php echo $e->getPublishDate(); ?></small></p>
                            </div>
                        </div>
                        </div>

                        </div>


                    <?php }endforeach; ?>




        </div>
    </div>
</div>
<?php require_once APP.'/app/views/layouts/footer.php' ?>

</body>
</html>