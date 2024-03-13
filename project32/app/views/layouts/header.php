


<div class="container-fuild">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img style="width: 180px" src="https://scontent.fhan3-3.fna.fbcdn.net/v/t39.30808-6/418566220_754626430035803_7256454928792382848_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGoXR7VX_43Y3nuprSW-aRnbtkNomQhefNu2Q2iZCF583UGA3o9t5lXeWLLTyL5MSSlybrj5C3sVeBxVefrFE3f&_nc_ohc=B8c6ADA7CQwAX9vHDIx&_nc_zt=23&_nc_ht=scontent.fhan3-3.fna&oh=00_AfBZ4TvONcGwNMRGZxAf9MhpcgeMxFO47r7AJ9auJzhVdg&oe=65EFF626" class="img-fluid">
                <div style="margin-left: 40px">
                    <h5>Trường đại học thủy lợi</h5>
                    <h1 style="color: #3d509f">THUY LOI UNIVERSITY</h1>
                    <p style="color: #ca373d">School of international education - Trường đào tạo quốc tế</p>
                </div>
            </div>
            <div>
                <ul style="list-style: none; align-items: center;">
                    <li>
                        <?php if(!isset($_SESSION['user_id'])): ?>
                        <a title="nav-link" style="color: #ca373d ; text-decoration: none" href="./index.php?controller=login&action=displayLogin">Login</a>
                        <?php else : ?>
                         <a title="nav-link" style="color: #ca373d ; text-decoration: none" href="./index.php?controller=logout&action=logout">LogOut</a>
                        <?php endif; ?>
                        <img style="width: 20px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Flag_of_Vietnam.svg/225px-Flag_of_Vietnam.svg.png" class="img-fluid">
                        <img style="width: 25px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/Flag_of_Australia_%28converted%29.svg/300px-Flag_of_Australia_%28converted%29.svg.png" class="img-fluid">                    </li>
                        <div style="border-bottom: 1px solid #9ca3af; margin-top: 2px;width: 100px;"></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #ca373d">
        <div class="container">
            <a class="navbar-brand " href="./index.php" style="color: white"><i class="fa-solid fa-house"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php
                    require_once APP.'/app/services/Postservices.php';
                    $controller = $_SESSION['controller'];
                    $postService = new Postservices();
                    $posts = $postService->getAllPosts();
                    foreach ($posts as $post) {
                        if ($controller == $post['controller']) {
                            ?>
                            <li class="nav-item">
                                <a class="nav-link" style="color: #ffffff" aria-current="page" href="../index.php?controller=<?php echo $post['controller']; ?>">
                                    <?php echo $post['name']; ?>
                                </a>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item">
                                <a class="nav-link active" style="color: silver" aria-current="page" href="../index.php?controller=<?php echo $post['controller']; ?>">
                                    <?php echo $post['name']; ?>
                                </a>
                            </li>
                        <?php }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

</div>
