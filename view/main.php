<style>
    .height {
        display: flex;
        flex-wrap: wrap;
    }

    .sum_listsp {
        width: 100%;
    }

    /* Các phần tử container */
    /* .container {
        width: 32%; 
        margin: 0 1%; 
    } */

    .custom-width {
        max-width: 1304px;
        
    }

    /* Phần tử cuối cùng của mỗi container */
    .container:last-child {
        width: 100%;
        /* Đặt kích thước cho phần tử cuối cùng */
    }
    form{
        display: flex;
        width: 100%;
        gap: 5px;
    }
    .custom-buy {
        height: 37px;
    /* margin-top: -230px; */
        width: 89px;
    }

    .custom-add-to-cart {
        height: 37px;
        width: 105px;
    }
</style>
<!-- slide show -->
<div class="sildeshow">
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/slider_1.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/slider_1.webp" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="introduce_sale">
        <div class="sale">
            <h2 style="color: #fda121;">Nội Thất Phòng Khách</h2>
            <span style="color: white;">Giảm đến 50% khi đặt qua web</span>
        </div>
        <div class="button_sale">
            <a href="">
                <button class="btn_sale" style="background: none;
                               color:black;
                               width: 150px;
                               color: white;
                               border: 1px solid white;
                               border-radius:5px;">
                    Xem ngay
                </button>
            </a>
        </div>
    </div>
</div>

<!-- menu phân loại sản phẩm -->
<section>
    <div class="product_classification">
        <div class="category_classification">
            <div class="classification">
                <img style="width: 89px; height: 90px" src="../img/danhmuc_1.webp" alt="">
                <h6 style="margin-top:30px; width:80px;">Ghế</h6>
            </div>
            <div class="classification">
                <img style="width: 89px; height: 90px" src="../img/danhmuc_2.webp" alt="">
                <h6 style="margin-top:30px; width:80px;">Bàn ăn</h6>
            </div>
            <div class="classification">
                <img style="width: 89px; height: 90px" src="../img/danhmuc_3.webp" alt="">
                <h6 style="margin-top:30px; width:80px;">Giường ngủ</h6>
            </div>
            <div class="classification">
                <img style="width: 89px; height: 90px" src="../img/danhmuc_4.webp" alt="">
                <h6 style="margin-top:30px; width:80px;">Đèn</h6>
            </div>
            <div class="classification">
                <img style="width: 89px; height: 90px" src="../img/danhmuc_5.jpg" alt="">
                <h6 style="margin-top:30px; width:80px;">Kệ để giày</h6>
            </div>
            <div class="classification">
                <img style="width: 89px; height: 90px" src="../img/danhmuc_6.webp" alt="">
                <h6 style="margin-top:30px; width:80px;">Ghế sofa</h6>
            </div>
            <div class="classification">
                <img style="width: 89px; height: 90px" src="../img/danhmuc_7.webp" alt="">
                <h6 style="margin-top:30px; width:80px;">Bàn</h6>
            </div>
            <div class="classification">
                <img style="width: 89px; height: 90px" src="../img/danhmuc_8.webp" alt="">
                <h6 style="margin-top:30px; width:80px;">Kệ TV</h6>
            </div>
            <div class="classification">
                <img style="width: 89px; height: 90px" src="../img/danhmuc_9.webp" alt="">
                <h6 style="margin-top:30px; width:80px;">Tủ quần áo</h6>
            </div>
        </div>
    </div>
</section>

<!-- danh sách sản phẩm-->
<h2 style="text-align: center; color:#fda121;">Sản Phẩm Nổi Bật</h2>
<div class="list_product">
    <a style="text-decoration: none;" href="index.php?act=spct">
        <div class="card" style="width: 18rem;">
            <img src="../img/sp1.webp" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 style="color:black" class="card-title ">Bàn Sofa – Bàn Cafe – Bàn Trà Gỗ Cao Su Trắng</h5>
                <p style="color:black" class="card-text">549.000đ</p>
                <a href="#" class="btn btn-primary">Mua</a>
                <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
            </div>
        </div>
    </a>
    
    <div class="card" style="width: 18rem;">
        <img src="../img/sp1.webp" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Bàn Sofa – Bàn Cafe – Bàn Trà Gỗ Cao Su Trắng</h5>
            <p class="card-text">549.000đ</p>
            <a href="#" class="btn btn-primary">Mua</a>
            <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="../img/sp1.webp" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Bàn Sofa – Bàn Cafe – Bàn Trà Gỗ Cao Su Trắng</h5>
            <p class="card-text">549.000đ</p>
            <a href="#" class="btn btn-primary">Mua</a>
            <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="../img/sp1.webp" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Bàn Sofa – Bàn Cafe – Bàn Trà Gỗ Cao Su Trắng</h5>
            <p class="card-text">549.000đ</p>
            <a href="#" class="btn btn-primary">Mua</a>
            <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
        </div>
    </div>
</div>
<div style="display: flex;  justify-content: center; padding: 20px;">
    <button type="button" class="btn btn-success">Xem tất cả</button>
</div>
<!-- thêm sản phẩm từ admin -->
<div class="height">
    <div class="sum_listsp">
        <!-- phong khách -->

        <div class="container">
            <div class="row p-4 custom-width">
                <div class="col">
                    <img class="w-100 h-100" src="../img/image_module_phongkhach.webp" alt="">
                    <div style="margin-left: 105px;" class="introduce_sale">
                        <div class="sale">
                            <h2 style="color: #fda121;">Nội Thất Phòng Khách</h2>
                            <span style="color: white;">Giảm đến 50% khi đặt qua web</span>
                        </div>
                        <div class="button_sale">
                            <a href="">
                                <button class="btn_sale" style="background: none;
                                       color:black;
                                       width: 150px;
                                       color: white;
                                       border: 1px solid white;
                                       border-radius:5px;">
                                    Xem ngay
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col d-flex flex-wrap gap-2 w-auto vh-300">
                    <?php
                    $image = 'img/';
                    foreach ($list_sp as $sp) {
                        extract($sp);
                        echo '<a href="index.php?act=spct&id='.$product_id.'" style = "text-decoration: none;">
                        <div class="col d-flex flex-wrap gap-2 w-auto vh-300">
                             <div class="card" style="width: 12rem; height: 357px;">
                             <img src="' . $image, $img . '" class="card-img-top" alt="...">
                             <div class="card-body">
                                  <h5 class="card-title small">' . $name . '</h5>
                                  <p class="card-text">' . $price . 'đ</p>
                             <div class="d-flex gap-1">
                             <form action="../view/index.php?act=add_cart" method="post">
                                    <!-- Trường input cho product_id -->
                                    <input type="hidden" name="product_id" value="1"> 

                                    
                                    <!-- Nút "Thêm vào giỏ hàng" -->
                                    <button type="submit" class="btn btn-primary btn-sm custom-add-to-cart" name="add_to_cart">Add cart</button>
                                    
                                    <input type="hidden" value="' .$product_id. '" name="id">
                                    <input type="hidden" value="' . $image, $img . '" name="img_sp">
                                    <input type="hidden" value="' . $name . '" name="name_sp">
                                    <input type="hidden" value="' . $price . '" name="price_sp">
                                    
                                </form>
                                    <!-- Nút "Mua" -->
                                    <button class="btn btn-primary btn-sm custom-buy" name="buy">Mua</button>
                             </div>
                         </div>
                        </div>
                     </div>
                     </a>';
                    }
                    ?>
                    <div class="mx-auto">
                        <button type="button" class="btn btn-success w-100"><a href="index.php?act=category&id=7">Xem Thêm</a></button>
                    </div>
                </div>
            </div>
        </div>
                
        <!-- phòng ngủ -->

        <div class="container">
            <div class="row p-4 custom-width">
                <div class="col d-flex flex-wrap gap-2 w-auto vh-300">
                    <?php
                    $image = 'img/';
                    foreach ($list_sp_phongngu as $bedroom) {
                        extract($bedroom);
                       
                        echo ' <div class="card" style="width: 12rem; height: 357px;">
                            <a href="index.php?act=spct&id='.$product_id.'" style = "text-decoration: none; color: black;">
                            <img src="' . $image, $img . '" class="card-img-top" alt="...">
                            <div class="card-body">
                             <h5 class="card-title small">' . $name . '/h5>
                             <p class="card-text">' . $price . 'đ</p>
                            <div class="d-flex gap-1">
                                <a href="#" class="btn btn-primary btn-sm">Buy</a>
                                <form action="../view/index.php?act=add_cart" method="post">
                                <!-- Trường input cho product_id -->
                                <input type="hidden" name="product_id" value="1"> 

                                
                                <!-- Nút "Thêm vào giỏ hàng" -->
                                <button type="submit" class="btn btn-primary btn-sm custom-add-to-cart" name="add_to_cart">Add cart</button>
                                
                                <input type="hidden" value="' .$product_id. '" name="id">
                                <input type="hidden" value="' . $image, $img . '" name="img_sp">
                                <input type="hidden" value="' . $name . '" name="name_sp">
                                <input type="hidden" value="' . $price . '" name="price_sp">
                                
                            </form>
                            </div>
                        </div>
                        </a>
                    </div>';
                    }
                    ?>
                    <div class="mx-auto">
                        <button type="button" class="btn btn-success w-100"><a href="index.php?act=category&id=20">Xem Thêm</a></button>
                    </div>
                </div>
                <div class="col">
                    <img class="w-100 h-100" src="../img/image_module_phongkhach.webp" alt="">
                    <div style="margin-left: 105px;" class="introduce_sale">
                        <div class="sale">
                            <h2 style="color: #fda121;">Nội Thất Phòng Ngủ</h2>
                            <span style="color: white;">Giảm đến 50% khi đặt qua web</span>
                        </div>
                        <div class="button_sale">
                            <a href="">
                                <button class="btn_sale" style="background: none;
                                       color:black;
                                       width: 150px;
                                       color: white;
                                       border: 1px solid white;
                                       border-radius:5px;">
                                    Xem ngay
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- phòng bếp -->

        <div class="container">
            <div class="row p-4 custom-width">
                <div class="col">
                    <img class="w-100 h-100" src="../img/image_module_phongkhach.webp" alt="">
                    <div style="margin-left: 105px;" class="introduce_sale">
                        <div class="sale">
                            <h2 style="color: #fda121;">Nội Thất Phòng Bếp</h2>
                            <span style="color: white;">Giảm đến 50% khi đặt qua web</span>
                        </div>
                        <div class="button_sale">
                            <a href="">
                                <button class="btn_sale" style="background: none;
                                       color:black;
                                       width: 150px;
                                       color: white;
                                       border: 1px solid white;
                                       border-radius:5px;">
                                    Xem ngay
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col d-flex flex-wrap gap-2 w-auto vh-300">
                    <?php
                    $image = 'img/';
                    foreach ($list_sp_phongbep as $kitchen) {
                        extract($kitchen);
                        echo '
                        <div class="card" style="width: 12rem; height: 357px;">
                            <a href="index.php?act=spct&id='.$product_id.'" style = "text-decoration: none; color: black;">
                            <img src="' . $image, $img . '" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title small">' . $name . '</h5>
                            <p class="card-text">' . $price . 'đ</p>
                            <div class="d-flex gap-1">
                                <a href="#" class="btn btn-primary btn-sm">Buy</a>
                                <form action="../view/index.php?act=add_cart" method="post">
                                <!-- Trường input cho product_id -->
                                <input type="hidden" name="product_id" value="1"> 

                                
                                <!-- Nút "Thêm vào giỏ hàng" -->
                                <button type="submit" class="btn btn-primary btn-sm custom-add-to-cart" name="add_to_cart">Add cart</button>
                                
                                <input type="hidden" value="' .$product_id. '" name="id">
                                <input type="hidden" value="' . $image, $img . '" name="img_sp">
                                <input type="hidden" value="' . $name . '" name="name_sp">
                                <input type="hidden" value="' . $price . '" name="price_sp">
                                
                            </form>
                            </div>
                        </div>
                        </a>
                    </div>';
                    }
                    ?>
                    <div class="mx-auto">
                        <button type="button" class="btn btn-success w-100"><a href="index.php?act=category&id=19">Xem Thêm</a></button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- <script>
    function onAddToCartClick(productId) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../view/index.php?act=add_cart', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Nếu muốn xử lý phản hồi từ server, bạn có thể thêm code ở đây
                updateCartHeader();
            }
        };
        xhr.send('id=' + productId);
    }

    function updateCartHeader() {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', '../view/index.php?act=get_cart_header', true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Cập nhật nội dung phần giỏ hàng trong header
                document.getElementById('cartHeaderContent').innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    }
</script> -->