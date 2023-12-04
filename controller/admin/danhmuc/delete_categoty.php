<?php
if (isset($_POST['submit_delete_category'])) {
    $id_delete = $_POST['submit_delete_category'];
    $sql = "DELETE FROM danhmuc WHERE id_category = :id";

    $delete_category = [
        ':id' => $id_delete,
    ];

    $data = pdo_execute($sql, $delete_category);

    if ($data) {
        echo '<script>
                setTimeout(function() {
                    window.location.href = "../admin/indexad.php?act=list_category";
                }, 1000);
              </script>';
    }
}
?>
