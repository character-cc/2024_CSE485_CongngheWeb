<?php
$ID = isset($_GET['ID']) ? $_GET['ID'] : null;
?>
<table>
    <form action="DeleteProcess.php" method="GET">
        <input type="hidden" name="Delete" value="YES">
        <input type="hidden" name="ID" value="<?= $ID ?>">
        <h4>Bạn có thật sự muốn xóa tài khoản</h4>
        <p>Dữ liệu của bạn sẽ không thể khôi phục</p>
        <button type="submit">Xác Nhận</button>
        <a href="/Admin/main.php">Quay Lại</a>
    </form>
</table>
