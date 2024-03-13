<?php
$ID = isset($_GET['ID']) ? $_GET['ID'] : null;
?>
<table>
    <form action="./index.php?controller=Info&action=DeleteProcess&ID=<?php echo $ID ?>" method="post">
        <input type="hidden" name="Delete" value="YES">
        <input type="hidden" name="ID" value="<?= $ID ?>">
        <h4>Bạn có thật sự muốn xóa tài khoản</h4>
        <p>Dữ liệu của bạn sẽ không thể khôi phục</p>
        <button type="submit">Xác Nhận</button>
    </form>

</table>
<a href="./index.php?controller=Info&action=Main&Role=<?= $_SESSION['user_role']?>">Trở về</a>