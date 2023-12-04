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
                        <th scope="col">STT</th>
                        <th scope="col">Loại hàng</th>
                        <th scope="col">Số Lượng</th>
                        <th scope="col">Giá cao nhất</th>
                        <th scope="col">Giá thấp nhất</th>
                        <th scope="col">Giá Trug bình</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($tksp as $tks) {
                        extract($tks);
                        echo "<tr>";
                        echo "<td>$madm</td>";
                        echo "<td>$tendm</td>";
                        echo "<td>$conutsp</td>";
                        echo "<td>$minprice</td>";
                        echo "<td>$maxsp</td>";
                        echo "<td>$avgprice</td>";
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