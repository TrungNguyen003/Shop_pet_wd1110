<?php
 if (isset($_POST['return'])) {
    $id = intval($_GET['id']);
    $rstatus = 2;
    $sql = "update duyetdon set trangthai=2 ,trangthaimua=:rstatus where id=:id";
    $query = $dbh->prepare($sql);
    $query->bindParam(':id', $id, PDO::PARAM_STR);
    $query->bindParam(':rstatus', $rstatus, PDO::PARAM_STR);
    $query->execute();
    $_SESSION['msg'] = "Book Returned successfully";
    header('location:../view/pheduyetdon_ad_view.php');
}
?>