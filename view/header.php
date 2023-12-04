<style>
    .custom-input {
        /* border: 1px solid #000; */
        /* Màu đen cho border */
        padding: 10px;
        /* Margin 10px bên phải */
    }

    .search_bootrap {
        margin: 10px;
    }

    .container_header {
        border-bottom: 1px solid black;
    }

    .fa-cart-shopping {
        font-size: 55px;
    }

    .buy_cart {
        width: 100%;
        margin-top: 20px;
    }

    .custom-offcanvas {
        width: 730px;
    }

    .list_cart {
        display: flex;
        width: 100%;
        gap: 65px;
        border: 1px solid #c2c2c2;
        padding: 20px;
    }

    .name_price_cart {
        width: 25%;
        font-size: 15px;
    }

    .quantity_cart {
        width: 25%;
    }

    .custom-product-details {
        margin-left: 37px;
    }

    .sum_cart {
        width: 14%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .quantity-btn {
        background: #a8c99a;
        color: black;
        width: 30px;
        border-radius: 5px;
        height: 32px;
        padding: 3px;
    }
    #quantityInput{
        border: none;
        width: 30px;
    }
    .ten{
        font-weight: bold;
    }
    .gia{
        color: #ffc107;
    }
    .out{
        font-size: 20px;
    }
</style>
<div style="max-width: 1490px;" class="container">
    <!-- phân contact, đăng nhập đăng kí  -->
    <div class="sum_contact">
        <div class="contact">
            <div class="phone_gamil">
                <a href="">
                    <span><i class="fa-solid fa-phone-volume"></i>0354510331</span>
                </a>
            </div>
            <div>
                <a href="phone_gamil">
                    <span><i class="fa-solid fa-envelope"></i>quyenbeo4002@gmail.com</span>
                </a>
            </div>
        </div>
        <div class="login_sign_infoweb">
            <div class="dn">
                <span><a href="index.php?act=dn">Login</a></span>
            </div>
            <div class="dn">
                <span><a href="index.php?act=dk">Sign</a></span>
            </div>
            <div class="dn">
                <span><a href="../view/index.php?act=login_ad">Admin</a></span>
            </div>
            <div class="out">
                <span><a href="index.php?act=out"> <i class="fa-solid fa-right-from-bracket"></i></a></span>
            </div>
        </div>
    </div>
</div>

<!-- phần header logo, danh mục sản phâm, menu, seach, giỏ hàng -->
<div class="container_header">
    <header style="width: 99%;">
        <div class="logo">
            <img src="../img/logo-removebg-preview.png" alt="">
        </div>
        <div class="category">
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Danh mục nổi bật
                </a>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Phòng khách</a></li>
                    <li><a class="dropdown-item" href="#">Phòng bếp</a></li>
                    <li><a class="dropdown-item" href="#">phòng ngủ</a></li>
                    <li><a class="dropdown-item" href="#">Phòng làm việc</a></li>
                    <li><a class="dropdown-item" href="#">Đồ trang trí</a></li>
                    <li><a class="dropdown-item" href="#">Bộ sưu tập</a></li>
                </ul>
            </div>
        </div>
        <div class="list_menu">
            <ul>
                <li><a href="index.php?act=/">Trang chủ</a></li>
                <li><a href="">Giới thiệu</a></li>
                <li><a href="">Sản phẩm</a></li>
                <li><a href="">Tin tức</a></li>
                <li><a href="">Liên hệ</a></li>
            </ul>
        </div>
        <div class="session" style="width: 100px; padding: 10px; display: flex; gap: 10px; justify-content: center;align-items: center;">
        <i class="fa-regular fa-circle-user" style="font-size: 50px;"></i>
                <?php
                   if (isset($_SESSION['name'])) {
                    echo $_SESSION['name'];
                }
                ?>
        </div>
        <!-- danh sách giỏ hàng -->
        <i class="fa-solid fa-cart-shopping " class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"></i>
        <div class="offcanvas offcanvas-end " style="width: 730px;" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasRightLabel">Danh Sách giỏ Hàng</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <!-- san pham gio hang -->
                <div class="list_cart">
                    <div class="img_cart">
                        <img src="../img/_2_10.webp" alt="" style="width: 80px;">
                    </div>
                    <div class="name_price_cart">
                        <span class="ten">Bàn Sofa–Bàn Cafe–Bàn Trà Gỗ Cao Su Trắng</span><br>
                        <span class="gia">199.000</span><br>
                    </div>
                    <div class="quantity_cart">
                        <div class="quantity-container">
                            <div class="product-details custom-product-details">
                                <div class="quantity-controls">
                                    <button  class="quantity-btn" onclick="decreaseQuantity()">-</button>
                                    <input type="text" id="quantityInput" value="1" readonly>
                                    <button  class="quantity-btn" onclick="increaseQuantity()">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sum_cart">
                        <span>123</span>
                    </div>
                </div>
                <div class="buy_cart">
                    <a href="../view/index.php?act=add_cart"><button type="button" class="btn btn-warning w-100">Xem Giỏ hàng</button></a>
                </div>
            </div>
        </div>
        <!-- end giỏ hàng -->

    </header>
</div>
<div class="search_bootrap">
    <form class="d-flex " role="search">
        <input class="form-control me-2 custom-input" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
</div>