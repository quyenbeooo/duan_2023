<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<!-- <style>
    swiper-container {
        width: 100%;
        height: 100%;
    }
    
    swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style> -->

<body>
    <div class="wraper">
        <?php
        session_start();

        if (!isset($_SESSION['cartt'])) $_SESSION['cartt'] = [];
        require 'header.php';
        require '../model/pdo.php';
        require '../view/cart/view_cart.php';
        if (isset($_GET['act'])) {
            $act = $_GET['act'];
        } else {
            // Nếu không có tham số act, đặt giá trị mặc định là '/'
            $act = '/';
        }

        switch ($act) {
            case 'quantri_use':
                require "index.php";
                break;
            case '/':
                // Lấy danh sách sản phẩm phòng khách
                $sql = "SELECT * FROM sanpham WHERE  id_category = 7 LIMIT 6";
                $list_sp = pdo_query($sql);

                // Lấy danh sách sản phẩm phòng ngủ
                $sql_phongngu = "SELECT * FROM sanpham WHERE id_category= 20 LIMIT 6";
                $list_sp_phongngu = pdo_query($sql_phongngu);

                // Lấy danh sách sản phẩm phòng bếp
                $sql_phongbep = "SELECT * FROM sanpham WHERE  id_category = 19 LIMIT 6";
                $list_sp_phongbep = pdo_query($sql_phongbep);
                require 'main.php';
                break;

                // hiện thị sản phẩm chi tiết theo id sản phẩm
            case 'spct':
                if (isset($_GET['id'])) {
                    $product_idd = $_GET['id'];
                    $sql = "SELECT * FROM sanpham WHERE product_id = " . $product_idd;
                    // $data_id = [':product_id' => $product_idd];
                    $list_spp = pdo_query_one($sql);
                }
                require 'spct.php';
                break;

                // danh mục chi tiết
            case 'category':
                // lây danh mục phòng khách
                $id_category = isset($_GET['id']) ? $_GET['id'] : 7; // Mặc định là 7 nếu không có id được chuyển
                $sql_danhmucpk = "SELECT * FROM sanpham WHERE  id_category = {$id_category}";
                $list_category_livingroom = pdo_query($sql_danhmucpk);

                // lây danh mục phòng ngủ
                $id_category = isset($_GET['id']) ? $_GET['id'] : 20; // Mặc định là 20 nếu không có id được chuyển
                $sql_danhmucpn = "SELECT * FROM sanpham WHERE  id_category = {$id_category}";
                $list_category_bedroom = pdo_query($sql_danhmucpn);

                // lây danh mục phòng bếp
                $id_category = isset($_GET['id']) ? $_GET['id'] : 19; // Mặc định là 19 nếu không có id được chuyển
                $sql_danhmucpb = "SELECT * FROM sanpham WHERE  id_category = {$id_category}";
                $list_category_kitchen = pdo_query($sql_danhmucpb);
                require 'danhmucct.php';
                break;

            case 'dn':
                if (isset($_POST['login'])) {
                    $login_user = $_POST['username'];
                    $login_pws = $_POST['psw'];
                    $sql = "SELECT * FROM taikhoan WHERE user='" . $login_user . "' AND pass='" . $login_pws . "'";
                    $login = pdo_query_one($sql);
                    if ($login) {
                        $_SESSION['name'] = $login['user'];
                        $_SESSION['user_id'] = intval($login['id_acc']);
                        echo '<script>window.location.href = "../view/index.php?act=/";</script>';
                    }
                }

                require 'login.php';
                break;
            case 'dk':
                if (isset($_POST['sign'])) {
                    $login_user = $_POST['uname'];
                    $login_pws = $_POST['psw'];
                    $psw_repeat = $_POST['psw-repeat'];
                    $email_pws = $_POST['emali'];
                    $sdt_pws = $_POST['sdt'];

                    $sql = "INSERT INTO taikhoan (user, pass, email, tel)
                        VALUES ('$login_user','$login_pws',' $email_pws ',' $sdt_pws ')";

                    // $data_sign = [

                    // ];
                    $sign = pdo_execute($sql);
                    if ($sign) {
                        echo '<script>window.location.href = "../view/index.php?act=dn";</script>';
                    }
                }
                require 'sign.php';
                break;
            case 'login_ad':
                if (isset($_POST['login_ad'])) {
                    $login_user = $_POST['username_ad'];
                    $login_pws = $_POST['psw_ad'];
                    if ($login_user == 'admin' &&   $login_pws == '123456') {
                        echo '<script>window.location.href = "../controller/admin/indexad.php";</script>';
                    };
                }
                require "../view/admin_user/login.php";
                break;
            case 'out':
                // Xóa tất cả các biến phiên
                $_SESSION['name'] = $login['user']['name'];

                // Hủy phiên
                session_destroy();
                echo '<script>window.location.href = "../view/index.php?act=dn";</script>';
                break;
            case 'add_cart':
                // Kiểm tra xem người dùng đã đăng nhập chưa
                if (isset($_SESSION['name'])) {
                    // Kiểm tra xem có dữ liệu được gửi từ biểu mẫu không
                    if ($_GET['act'] == 'add_cart' && isset($_POST['add_to_cart'])) {
                        $product_id = $_POST['id'];
                        $img_sp = $_POST['img_sp'];
                        $name_sp = $_POST['name_sp'];
                        $price_sp = $_POST['price_sp'];
                        $quantity = 1;
                        $sum_price = $quantity * $price_sp;

                        // Kiểm tra xem có giỏ hàng trong phiên không
                        if (!isset($_SESSION['carttr'])) {
                            $_SESSION['carttr'] = array();
                        }

                        // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
                        $product_exists = false;
                        foreach ($_SESSION['carttr'] as &$existing_item) {
                            if ($existing_item[0] == $product_id) {
                                // Nếu sản phẩm đã tồn tại, cập nhật số lượng
                                $existing_item[3] += $quantity;
                                $existing_item[5] += $sum_price;
                                $product_exists = true;
                                break;
                            }
                        }
                        // Nếu sản phẩm chưa tồn tại, thêm vào giỏ hàng
                        if (!$product_exists) {
                            $item = [
                                $product_id,
                                $img_sp,
                                $name_sp,
                                $quantity,
                                $price_sp,
                                $sum_price
                            ];
                            $_SESSION['carttr'][] = $item;
                        }

                        // Chuyển hướng người dùng sau khi thêm sản phẩm vào giỏ hàng
                        echo '<script>window.location.href = "../view/index.php?act=add_cart";</script>';
                    }
                } else {
                    // Người dùng chưa đăng nhập, có thể hiển thị thông báo hoặc chuyển hướng đến trang đăng nhập
                    echo '<script>alert("Bạn cần đăng nhập để thêm sản phẩm vào giỏ hàng.");</script>';
                    header('Location: ../view/index.php?act=dn'); // Chuyển hướng đến trang đăng nhập
                }
                

                require '../view/cart/cart.php';
                break;
            case 'remove_cart':
                if (isset($_GET['id']) && $_GET['id'] >= 0) {
                    array_splice($_SESSION['carttr'],$_GET['id'],1); 
                }
                require '../view/cart/cart.php';
                break;
            case 'pay_cart':

                require './cart/pay_cart.php';
                break;
            case 'pay_cart_comfirm':
                $id_bill = '';
                if (isset($_POST['pay'])) {
                    $ten = isset($_POST['userten']) ? $_POST['userten'] : '';
                    $diachi = isset($_POST['diachi']) ? $_POST['diachi'] : '';
                    $phone = isset($_POST['sodienthoai']) ? $_POST['sodienthoai'] : '';
                    $mail = isset($_POST['mail']) ? $_POST['mail'] : '';
                    $pttt = isset($_POST['pttt']) ? $_POST['pttt'] : '';
                    $date_cart = date('h:i:sa d/m/Y');
                    $thanhtien = total();

                    $id_bill = insert_bill($ten, $diachi, $phone, $mail, $pttt, $date_cart, $thanhtien);

                    // insert into bảng cart để lây dữ liệu từ sesstion  $_SESSION['carttr']
                    foreach ($_SESSION['carttr'] as $cart) {
                        insert_cart($_SESSION['user_id'], $cart[0], $cart[1], $cart[2], $cart[4], $cart[3], $cart[5], $id_bill);
                        // echo "<pre>";
                        // var_dump($_SESSION['carttr']);
                        // echo "<pre>";
                    }
                }
                $list_bill = loadone_bill($id_bill);
                require '../view/cart/bill_comfirm.php';
                break;
            default:
                break;
        }
        require 'footer.php';
        ?>
        <script src="index.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>