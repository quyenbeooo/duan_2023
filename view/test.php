<style>
    .pay_cart {
        width: 20%;
        display: flex;
        gap: 10px;
    }

    .pay {
        width: 60%;
        height: 70px;
    }

    .delete {
        width: 60%;
        height: 70px;
    }


    .custom-btn,
    a {
        width: 100px;
        text-decoration: none;
        color: white;
    }
</style>
<div class="img_banner">
    <img style="width: 100%; height: 250px;" src="../img/banerdm.jpg" alt="">
</div>
<h1 style="text-align: center; color:darkgoldenrod;">Giỏ hàng</h1>
<table class="table">
    <!-- // if ((isset($_SESSION['cartt'])) && (count($_SESSION['cartt']) > 0)) {  -->
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên</th>
            <th scope="col">Số Lượng</th>
            <th scope="col">Ảnh</th>
            <th scope="col">Giá</th>
            <th scope="col">Thao Tác</th>
        </tr>
    </thead>

    <?php
    $id_user = intval($_SESSION['user_id']);
    $sql = "SELECT * FROM giohang WHERE user_id = $id_user";
    $connect = pdo_get_connection();
    $statement = $connect->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    $sum = 0;
    
    foreach ($result as $key => $value) {
        extract($value);
        $sum = $price * $quantity;
    ?>
        <tr>
            <th scope="row"><?= $product_id ?></th>
            <td><?= $name ?></td>
            <td><?= $quantity ?></td>
            <td><img src="<?= $image?>" alt="" style="width: 100px;"></td>
            <td><?= $price ?></td>
            <td>
                <form method="get" action="../view/index.php?act=remove_cart">
                    <input type="hidden" name="act" value="remove_cart">
                    <input type="hidden" name="idcart" value="' . $product_id. '">
                    <button type="submit" class="btn btn-danger custom-btn">Xóa</button>
                </form>

            </td>
        </tr>
    <?php
    }
    ?>



    <tr>
        <td colspan="4">
            <h2>Tổng đơn hàng</h2>
        </td>

        <td>
            <h5><?= $sum ?>đ</h5>
        </td>
        <td>
            <button style="width: 100px;" type="submit" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">
                <a href="../view/index.php?act=pay_cart" style="color: white; text-decoration: none;">Thanh Toán</a>
            </button>
        </td>
    </tr>

</table>