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
                        <th scope="col">user</th>
                        <th scope="col">password</th>
                        <th scope="col">email</th>
                        <th scope="col">address</th>
                        <th scope="col">phone</th>
                        <th scope="col">role</th>
                        <th scope="col">Thao Tác</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $sql = "SELECT * FROM taikhoan";
                    $customer = pdo_query($sql);
                    foreach ($customer as $key) {
                        echo "<tr>";
                        echo "<td>{$key['id_acc']}</td>";
                        echo "<td>{$key['user']}</td>";
                        echo "<td>{$key['pass']}</td>";
                        echo "<td>{$key['email']}</td>";
                        echo "<td>{$key['address']}</td>";
                        echo "<td>{$key['tel']}</td>";
                        echo "<td>{$key['role']}</td>";
                        echo "<td>
                            <form action='../admin/indexad.php?act=delete' method='post'>
                                <button type='submit' class='btn btn-secondary' name='submit_delete' value='' onclick='return confirm(\"Bạn có chắc chắn không\")'>khóa tài khoản</button>
                            </form>
                        </td>";
                        echo "</tr>";
                    }

                    ?>
                </tbody>
            </table>
            <!-- <button type="button" class="btn btn-success"><a href="../admin/indexad.php?act=themsp" class='text-white'>Thêm</a></button> -->
        </div>
    </nav>
</body>

</html>