<div style="display: flex; gap: 60px; justify-content: center; margin: 90px;" class="sum">
    <div style="width: 595px;" id="carouselExampleFade" class="carousel slide carousel-fade">
            <?php
                $image = 'img/';
                extract($list_spp);
            ?>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= $image, $img ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/sp2.webp" class="d-block w-100" alt="...">
            </div>
        </div>
        <button style="height: 476px;" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button style="height: 476px;" class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="info_product">
        <div class="name_product">
            <?php
                extract($list_spp);
            ?>
            <h3><?= $name?></h3>
        </div>
        <div class="Status">
            <b>Tình trạng:</b>
            <span>Còn hàng</span><br>
            <b>Mã hàng:</b>
            <span>1234</span>
        </div>
        <div class="pirce_product">
            <?php
                extract($list_spp);
            ?>
            <span class="price_sp"><?= $price?></span>
        </div>
        <div class="describe_product">
            <?php
                extract($list_spp);
            ?>
            <p><?= $mota?></p>
            <!-- <p>- Chân bàn: Gỗ cao su tự nhiên</p>
            <p>(*) Tiêu chuẩn California Air Resources Board xuất khẩu Mỹ, đảm bảo gỗ không độc hại, an toàn cho sức khỏe</p>
            <p>Chống thấm, cong vênh, trầy xước, mối mọt</p> -->
        </div>
        <div class="quantity-container">
            <div class="product-details">
                <div class="quantity-controls">
                    <button style="background: white; color:black;" class="quantity-btn" onclick="decreaseQuantity()">-</button>
                    <input type="text" id="quantityInput" value="1" readonly>
                    <button style="background: white; color:black;" class="quantity-btn" onclick="increaseQuantity()">+</button>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-warning mt-4">Buy</button>
        <button type="button" class="btn btn-warning  mt-4" style="width: 110px;">Add cart</button>
        <div class="khuyen_mai">
            <div class="title_sp">
                <img width="20" height="20" src="//bizweb.dktcdn.net/100/480/479/themes/900388/assets/giftbox.png?1696989341316" alt="vouver"><span>Khuyến mãi đặc biệt !!!</span>
            </div>
            <div class="content_km">
                <ul>
                    <li><img width="20" height="20" src="//bizweb.dktcdn.net/100/480/479/themes/900388/assets/km_product1.png?1696989341316" alt="Áp dụng Phiếu quà tặng/ Mã giảm giá theo ngành hàng.">Áp dụng Phiếu quà tặng/ Mã giảm giá theo ngành hàng.</li>
                    <li><img width="20" height="20" src="//bizweb.dktcdn.net/100/480/479/themes/900388/assets/km_product2.png?1696989341316" alt="Giảm giá 10% khi mua từ 5 sản phẩm trở lên.">Giảm giá 10% khi mua từ 5 sản phẩm trở lên.</li>
                    <li><img width="20" height="20" src="//bizweb.dktcdn.net/100/480/479/themes/900388/assets/km_product3.png?1696989341316" alt="Tặng 100.000₫ mua hàng tại website thành viên Dola Furniture, áp dụng khi mua Online tại Hồ Chí Minh và 1 số khu vực khác.">Tặng 100.000₫ mua hàng tại website thành viên Dola Furniture, áp dụng khi mua Online tại Hồ Chí Minh và 1 số khu vực khác.</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- mô ta sản phẩm -->

<h4 style="text-align: center;">Mô ta sản phẩm</h4>
<div class="info_sanpham">
    <div class="info_one">
        <h2>1. THÔNG SÔ KĨ THUẬT</h2>
        <img src="../img/mtsp1.webp" alt="">
    </div>

    <div class="info_one">
        <h2>1. THÔNG SÔ KĨ THUẬT</h2>
        <h5>Gỗ công nghiệp</h5>
        <p>Sản phẩm làm từ gỗ công nghiệp (PB, MDF) đáp ứng tiêu chí CARB-P2 hoàn toàn an toàn với sức khỏe con người <br>
            và được cấp chứng chỉ FSC về bảo tồn và phát triển rừng.</p>
        <img src="../img/mtsp1.webp" alt="">
    </div>

    <div class="info_one">
        <h2>2. CHI TIẾT SẢN PHẨM</h2>
        <h5>Gỗ công nghiệp</h5>
        <p>Sản phẩm làm từ gỗ công nghiệp (PB, MDF) đáp ứng tiêu chí CARB-P2 hoàn toàn an toàn với sức khỏe con người <br>
            và được cấp chứng chỉ FSC về bảo tồn và phát triển rừng.</p>
        <img src="../img/mtsp1.webp" alt="">
    </div>

    <div class="info_one">
        <h2>3. ĐẶC ĐIỂM NỔI BẬT</h2>
        <h5>Gỗ công nghiệp</h5>
        <p>Sản phẩm làm từ gỗ công nghiệp (PB, MDF) đáp ứng tiêu chí CARB-P2 hoàn toàn an toàn với sức khỏe con người <br>
            và được cấp chứng chỉ FSC về bảo tồn và phát triển rừng.</p>
        <img src="../img/mtsp1.webp" alt="">
    </div>

    <div class="info_one">
        <h2>4. KHÔNG GIAN SỐNG</h2>
        <h5>Gỗ công nghiệp</h5>
        <p>Sản phẩm làm từ gỗ công nghiệp (PB, MDF) đáp ứng tiêu chí CARB-P2 hoàn toàn an toàn với sức khỏe con người <br>
            và được cấp chứng chỉ FSC về bảo tồn và phát triển rừng.</p>
        <img src="../img/mtsp1.webp" alt="">
    </div>
</div>