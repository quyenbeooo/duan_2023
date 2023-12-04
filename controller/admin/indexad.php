<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<!-- <nav class="main-header navbar navbar-expand navbar-white navbar-light"> -->

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php
        session_start();
        require "../../model/pdo.php";
        require "../admin/navbar.php";
        require "../admin/aside.php";
        if (isset($_GET['act'])) {
            $act = $_GET['act'];
            switch ($act) {
                case 'homead':
                    require "sanpham/list.php";
                    break;

                // thêm sửa xóa danh mục
                case 'category':
                    if (isset($_POST['add_category'])) {
                        $name_category = $_POST['name_dm'];
                        $sql = "INSERT INTO danhmuc(name) VALUES ('$name_category')";
                        pdo_execute($sql);
                    }
                    require "danhmuc/category.php";
                    break;
                case 'list_category':
                    require "danhmuc/list_category.php";
                    break;
                case 'update_category':
                    require "danhmuc/update_category.php";
                    break;
                case 'delete_category':
                    require "danhmuc/delete_categoty.php";
                    break;
                // end danh muc
                
                // thêm sửa xóa sản phẩm 
                case 'themsp':
                    require 'sanpham/add.php';
                    $sql = "SELECT * FROM sanpham ";
                    $product = pdo_query($sql);
                    if (isset($_POST['add'])) {
                        $name_sp = $_POST['name'];
                        $price_sp = $_POST['price'];
                        $mota_sp = $_POST['mota'];
                        $iddm = $_POST['iddm'];

                        $target_dir = '../../img/';
                        $img = $_FILES['img_file']['name'];
                        $random = rand(1, 10);
                        $target_file = $target_dir . '_' . $random . '_' . $img;

                        if ($_FILES['img_file']['error'] === UPLOAD_ERR_OK) {
                            move_uploaded_file($_FILES['img_file']['tmp_name'], $target_file);
                        }
                        $sql =
                            "INSERT INTO sanpham 
                        (name, price, img, mota, view, id_category) 
                        VALUES
                        (:name, :price, :img, :mota, :view, :id_dm);";

                        $data = [
                            ':name' => $name_sp,
                            ':price' => $price_sp,
                            ':img' => $target_file,
                            ':mota' => $mota_sp,
                            ':view' => '',
                            ':id_dm' => $iddm,
                        ];
                        $excuted = pdo_execute($sql, $data);
                        if ($excuted) {
                            $_SESSION['success_message'] = 'Sản phẩm đã được thêm thành công.';
                            echo '<script>
                                    setTimeout(function() {
                                        window.location.href = "../admin/indexad.php?act=homead";
                                    }, 1000);
                                  </script>';
                            exit;
                        }
                    }
                    break;
                case 'delete':
                    require "./sanpham/delete.php";
                    break;
                case 'update':

                    $id = isset($_GET['product_id']) ? $_GET['product_id'] : null;
                    echo $id;
                    if (isset($_POST['submit_update'])) {

                        // if ($id !== null) {
                        //     $query_select = "SELECT * FROM sanpham WHERE id = :_id ";
                        //     $dataSelect = [
                        //         ':_id' => $id,
                        //     ];
                        //     $state = pdo_query($query_select, $dataSelect);
                        // }
                        $name_sp = $_POST['name_sp'];
                        $price_sp = $_POST['price_sp'];
                        $mota_sp = $_POST['mota_sp'];
                        $iddm = $_POST['iddm'];

                        $target_dir = '../../img/';
                        $img = $_FILES['img_file']['name'];
                        $random = rand(1, 10);
                        $target_file = $target_dir . '_' . $random . '_' . $img;

                        if ($_FILES['img_file']['error'] === UPLOAD_ERR_OK) {
                            move_uploaded_file($_FILES['img_file']['tmp_name'], $target_file);
                        }
                        $sql =
                            "UPDATE sanpham SET 
                        name=:name, price=:price_sp, img=:image, mota=:mota_sp, id_category=:id_dm WHERE product_id=:_id";
                        $data_update = [
                            ':name' => $name_sp,
                            ':price_sp' => $price_sp,
                            ':image' => $target_file,
                            ':mota_sp' => $mota_sp,
                            // ':view_sp' => '',
                            ':id_dm' => $iddm,
                            ':_id' => $id,
                        ];
                        $excuted = pdo_execute($sql, $data_update);
                        if ($excuted) {
                            $_SESSION['success_message'] = 'Sản phẩm đã sửa thêm thành công.';
                            echo '<script>window.location.href = "../admin/indexad.php?act=homead";</script>';
                            exit;
                        }
                    }
                    require './sanpham/update.php';
                    break;
                case 'customer':
                    require '../admin/khachhang/customer.php';
                    break;
                    // end sản phẩm
                case 'tk':
                        $sql = "SELECT danhmuc.id_category as madm, danhmuc.name as tendm, count(sanpham.product_id) as conutsp, min(sanpham.price) as minprice, max(sanpham.price) as maxsp, avg(sanpham.price) as avgprice";
                        $sql .= " FROM sanpham LEFT JOIN danhmuc ON danhmuc.id_category = sanpham.id_category";
                        $sql .= " GROUP BY danhmuc.id_category ORDER BY danhmuc.id_category DESC";
                        $tksp = pdo_query($sql);
                        require "../admin/thongke/thognkesp.php";
                        return $tksp;
                        break;
                    
            }
        }

        ?>
    </div>
    </nav>
    <!-- ./wrapper -->
    <script src="../../view/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    
    <script>
    // Check if the session message exists
    var successMessage = "<?php echo isset($_SESSION['success_message']) ? $_SESSION['success_message'] : ''; ?>";

    // If the message exists, display it and remove it after 1 second
    if (successMessage !== '') {
        alert(successMessage);
        setTimeout(function() {
            <?php unset($_SESSION['success_message']); ?>
        }, 1000);
    }
    </script>

</body>

</html>