<html>
<header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</header>
<body>
<form style="display: flex;flex-direction: column" method="post" action="./index.php?controller=Info&action=AddProcess">
    <table>
        EmployeeID :<input name="EmployeeID" class="form-control" type="text" placeholder="Default input" aria-label="default input example">
        Username :<input name="Username" class="form-control" type="text" placeholder="Default input" aria-label="default input example">
        Password :<input name="Password" class="form-control" type="text" placeholder="Default input" aria-label="default input example">
        Role :<input name="Role" class="form-control" type="text" placeholder="Default input" aria-label="default input example">
        Fullname :<input name="Fullname" class="form-control" type="text" placeholder="Default input" aria-label="default input example">
        Address :<input name="Address" class="form-control" type="text" placeholder="Default input" aria-label="default input example">
        Email :<input name="Email" class="form-control" type="text" placeholder="Default input" aria-label="default input example">
        SĐT :<input name="MobilePhone" class="form-control" type="text" placeholder="Default input" aria-label="default input example">
        Position :<input name="Position" class="form-control" type="text" placeholder="Default input" aria-label="default input example">
        DepartmentID :<input name="DepartmentID" class="form-control" type="text" placeholder="Default input" aria-label="default input example">
    </table>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3" value="Thêm Tài Khoản">Thêm Tài Khoản</button>
    </div>
</form><div class="col-auto">
    <button  type="submit" class="btn btn-primary mb-3"> <a style="text-decoration: none;color: white" href="./index.php?controller=Info&action=Main&Role=<?= $_SESSION['user_role']?>">Trở về</a></button>
</div>
</body>
</html>
