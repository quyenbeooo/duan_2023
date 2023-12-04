<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .conten_admin {
        width: 100%;
    }
</style>

<body>
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <div class="conten_admin">
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Mô tả</th>
                        <th scope="col">Người Xem</th>
                        <th scope="col">ID Danh Mục</th>
                        <th scope="col">Thao Tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM sanpham";
                    $result = pdo_query($sql);
                    foreach ($result as $key) {
                        echo "<tr>";
                        echo "<td>{$key['product_id']}</td>";
                        echo "<td>{$key['name']}</td>";
                        echo "<td>{$key['price']}</td>";
                        echo "<td><img src='{$key['img']}' alt='' style='width: 150px;'></td>";
                        echo "<td>{$key['mota']}</td>";
                        echo "<td>{$key['view']}</td>";
                        echo "<td>{$key['id_category']}</td>";
                        echo "<td>
                            <a href='../admin/indexad.php?act=update&product_id={$key['product_id']}' class='text-white'>
                                <button type='button' class='btn btn-secondary'>Sửa</button>
                            </a>
                            <form action='../admin/indexad.php?act=delete' method='post'>
                                <button type='submit' class='btn btn-secondary' name='submit_delete' value='{$key['product_id']}' onclick='return confirm(\"Are you sure you want to delete?\")'>Xóa</button>
                            </form>
                        </td>";
                        echo "</tr>";
                    }

                    ?>
                </tbody>
            </table>
            <button type="button" class="btn btn-success"><a href="../admin/indexad.php?act=themsp" class='text-white'>Thêm</a></button>
        </div>
    </nav>
</body>

</html>