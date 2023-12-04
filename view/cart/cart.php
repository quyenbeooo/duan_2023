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
    
    $sum = 0;
    $i = 0;
    // Khởi tạo 'carttr' nếu chưa được đặt
    if (!isset($_SESSION['carttr'])) {
        $_SESSION['carttr'] = array();
    }

    foreach ($_SESSION['carttr'] as $cart) {
        // echo '<pre>';
        // var_dump($_GET['act']);
        // echo '</pre>';
        $product_id = $cart[0];
        $img_sp = $cart[1];
        $name_sp = $cart[2];
        $quantity = $cart[3];
        $price_sp = $cart[4];
        $summ =  $price_sp * $quantity;
        $sum += $summ;
        // $i++;
    ?>
        <tr>
            <th scope="row"><?= $product_id ?></th>
            <td><?= $name_sp ?></td>
            <td>
                <button  class="quantity-btn" id="decreaseBtn" >-</button>
                    <input type="text" id="quantityInput" value="<?=$quantity?>" readonly>
                <button  class="quantity-btn" id="increaseBtn" >+</button>
            </td>
            <td><img src="<?= $img_sp ?>" alt="" style="width: 100px;"></td>
            <td><?= $price_sp ?></td>
            <td>
                <button type="submit" class="btn btn-danger custom-btn">
                    <a href="../view/index.php?act=remove_cart&id=0" >Xóa</a>
                </button>
            </td>
        </tr>
    <?php } ?>
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
<script >
    document.addEventListener("DOMContentLoaded", function () {
        let quantityInput = document.getElementById("quantityInput");
        let decreaseBtn = document.getElementById("decreaseBtn");
        let increaseBtn = document.getElementById("increaseBtn");

        increaseBtn.addEventListener("click", function () {
            let quantity = parseInt(quantityInput.value);
            quantityInput.value = quantity + 1;
        });

        decreaseBtn.addEventListener("click", function () {
            let quantity = parseInt(quantityInput.value);
            if (quantity > 1) {
                quantityInput.value = quantity - 1;
            }
        });
    });
</script>