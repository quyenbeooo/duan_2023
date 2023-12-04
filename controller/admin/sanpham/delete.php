<?php
if (isset($_POST['submit_delete'])) {
    $id = $_POST['submit_delete'];
    $sql =  "DELETE FROM sanpham WHERE product_id = :_id";
    echo $id;
    $data_delete = [
        ':_id' => $id,
    ];

    $xoa = pdo_execute($sql, $data_delete);

    if ($xoa) {
        echo '<script>window.location.href = "../admin/indexad.php?act=homead";</script>';
        exit;
    }
}
