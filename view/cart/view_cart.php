<?php
function viewcart(){
    $sum = 0;
    $i = 0;
    echo '<table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Số Lượng</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Giá</th>
                </tr>
            </thead>
            <tbody>';
    
    foreach ($_SESSION['carttr'] as $cart) {
        // echo "<pre>";
        // var_dump($_SESSION['carttr']);
        // echo "</pre>";
        // exit();
        $product_id = $cart[0];
        $img_sp = $cart[1];
        $name_sp = $cart[2];
        $quantity = $cart[3];
        $price_sp = $cart[4];
        $summ =  $price_sp * $quantity;
        $sum += $summ;
        
        echo '<tr>
                <th scope="row">' . $product_id . '</th>
                <td>' . $name_sp . '</td>
                <td>' . $quantity . '</td>
                <td><img src="' . $img_sp . '" alt="" style="width: 100px;"></td>
                <td>' . $price_sp . '</td>
              </tr>';
    }
    echo '<tr>
    <td colspan="4">
        <h2>Tổng đơn hàng</h2>
    </td>

    <td>
        <h5>'.$sum.'đ</h5>
    </td>';
    echo '</tbody>
          </table>';
}
function total(){
    $sum = 0;
   
    foreach ($_SESSION['carttr'] as $cart) {
        $summ = $cart[4] * $cart[3];
        $sum += $summ;
        
       
    }
    return $sum;
}

function insert_bill ($ten, $diachi, $phone, $mail, $pttt, $date_cart, $thanhtien){
  $sql = "INSERT INTO bill (id_name, bill_adress, tel_bill, email_bill, bill_pttt, date_bill, total) VALUES
  ('$ten', '$diachi', '$phone', '$mail', '$pttt', '$date_cart', '$thanhtien')";
  return pdo_execute_return_lastInsertID($sql);
}
function insert_cart($id_user, $product_id, $img, $name, $price, $soluong, $total, $id_bill){
    $sql = "INSERT INTO giohang (user_id , product_id , image, name, price, soluong , total_price_cart, id_bill ) VALUES
    ($id_user, $product_id, '$img', '$name', $price, $soluong, $total,$id_bill)";
    // var_dump($sql);
    // exit;
    return pdo_execute_cart($sql);
}

function loadone_bill($id){
    $sql = "SELECT * FROM bill WHERE id =".$id;
    $bill = pdo_query_one($sql);
    return $bill;
}
?>
    