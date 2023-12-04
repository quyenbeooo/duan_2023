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
                        <th scope="col">Thao Tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM danhmuc";
                    $result_category = pdo_query($sql);
                    foreach ($result_category as $key) {
                        echo "<tr>";
                        echo "<td>{$key['id_category']}</td>";
                        echo "<td>{$key['name']}</td>";
                        echo "<td class='d-flex'>
                            <a href='../admin/indexad.php?act=update&product_id=' class='text-white'>
                                <button type='button' class='btn btn-secondary  mr-2' >Sửa</button>
                            </a>
                            <form action='../admin/indexad.php?act=delete_category' method='post'>
                                <button type='submit' class='btn btn-secondary' name='submit_delete_category' value='{$key['id_category']}' onclick='return confirm(\"Are you sure you want to delete?\")'>Xóa</button>
                            </form>
                            </td>";
                        echo "</tr>";
                    }

                    ?>
                    <!-- <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td colspan="2"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr> -->
                </tbody>
            </table>
        </div>
    </nav>
</body>

</html>