<style>
    /* #accordionFlushExample {
        max-width: 300px;
        margin: 39px;
        padding: 19px;
        border: 1px solid gray;
    } */
    body {
        background: #f3f3f3;
    }

    .body_dm {
        display: flex;
        height: auto;
    }

    .categoty_ct {
        max-width: 30%;
        margin: 39px;
        padding: 19px;
        border: 1px solid #fca120;
        border-radius: 10px;
        height: 450px;
    }

    .product_dm {
        width: 70%;
        display: flex;
        flex-wrap: wrap;
        gap: 50px;
        margin: 39px;
    }

    .img_banner img {
        height: 200px;
        width: 100%;
    }
</style>
<div class="img_banner">
    <img src="../img/banerdm.jpg" alt="">
</div>
<div class="title_dmct">
        <h1 style="text-align: center; color:#fda121;">Sản Phẩm Phòng Khách</h1>
    </div>
<div class="body_dm">
    <div class="categoty_ct">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <h2 style="color: #fca120;">Danh mục sản phẩm</h2>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Phòng khách
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <a href="">1</a>
                    </div>
                    <div class="accordion-body">
                        <a href="">1</a>
                    </div>
                    <div class="accordion-body">
                        <a href="">1</a>
                    </div>
                    <div class="accordion-body">
                        <a href="">1</a>
                    </div>
                    <div class="accordion-body">
                        <a href="">1</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Phòng bếp
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <a href="">1</a>
                    </div>
                    <div class="accordion-body">
                        <a href="">1</a>
                    </div>
                    <div class="accordion-body">
                        <a href="">1</a>
                    </div>
                    <div class="accordion-body">
                        <a href="">1</a>
                    </div>
                    <div class="accordion-body">
                        <a href="">1</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Phòng ngủ
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <a href="">1</a>
                    </div>
                    <div class="accordion-body">
                        <a href="">1</a>
                    </div>
                    <div class="accordion-body">
                        <a href="">1</a>
                    </div>
                    <div class="accordion-body">
                        <a href="">1</a>
                    </div>
                    <div class="accordion-body">
                        <a href="">1</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Phòng Làm việc
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <a href="">1</a>
                    </div>
                    <div class="accordion-body">
                        <a href="">1</a>
                    </div>
                    <div class="accordion-body">
                        <a href="">1</a>
                    </div>
                    <div class="accordion-body">
                        <a href="">1</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Đồ trang trí
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <a href="">1</a>
                    </div>
                    <div class="accordion-body">
                        <a href="">1</a>
                    </div>
                    <div class="accordion-body">
                        <a href="">1</a>
                    </div>
                    <div class="accordion-body">
                        <a href="">1</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Bộ sưu tập
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <a href="">1</a>
                    </div>
                    <div class="accordion-body">
                        <a href="">1</a>
                    </div>
                    <div class="accordion-body">
                        <a href="">1</a>
                    </div>
                    <div class="accordion-body">
                        <a href="">1</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product_dm">
        <?php
         $image = 'img/';
        foreach ($list_category_livingroom as $category_pk) {
           extract($category_pk);
           echo '<div class="card" style="width: 12rem; height: 357px;">
           <img src="' . $image, $img . '" class="card-img-top" alt="...">
           <div class="card-body">
               <h5 class="card-title small">'.$name.'</h5>
               <p class="card-text">'.$price.'</p>
               <div class="d-flex gap-1">
                   <a href="#" class="btn btn-primary btn-sm">Buy</a>
                   <a href="#" class="btn btn-primary btn-sm">Add cart</a>
               </div>
           </div>
       </div>';
        }
        ?>
        <!-- <div class="card" style="width: 12rem; height: 357px;">
            <img src="../img/sp1.webp" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title small">Bàn Sofa – Bàn Cafe – Bàn Trà Gỗ Cao Su Trắng</h5>
                <p class="card-text">549.000đ</p>
                <div class="d-flex gap-1">
                    <a href="#" class="btn btn-primary btn-sm">Buy</a>
                    <a href="#" class="btn btn-primary btn-sm">Add cart</a>
                </div>
            </div>
        </div> -->
        <!-- <div class="card" style="width: 12rem; height: 357px;">
            <img src="../img/sp1.webp" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title small">Bàn Sofa – Bàn Cafe – Bàn Trà Gỗ Cao Su Trắng</h5>
                <p class="card-text">549.000đ</p>
                <div class="d-flex gap-1">
                    <a href="#" class="btn btn-primary btn-sm">Buy</a>
                    <a href="#" class="btn btn-primary btn-sm">Add cart</a>
                </div>
            </div>
        </div>
        <div class="card" style="width: 12rem; height: 357px;">
            <img src="../img/sp1.webp" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title small">Bàn Sofa – Bàn Cafe – Bàn Trà Gỗ Cao Su Trắng</h5>
                <p class="card-text">549.000đ</p>
                <div class="d-flex gap-1">
                    <a href="#" class="btn btn-primary btn-sm">Buy</a>
                    <a href="#" class="btn btn-primary btn-sm">Add cart</a>
                </div>
            </div>
        </div>
        <div class="card" style="width: 12rem; height: 357px;">
            <img src="../img/sp1.webp" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title small">Bàn Sofa – Bàn Cafe – Bàn Trà Gỗ Cao Su Trắng</h5>
                <p class="card-text">549.000đ</p>
                <div class="d-flex gap-1">
                    <a href="#" class="btn btn-primary btn-sm">Buy</a>
                    <a href="#" class="btn btn-primary btn-sm">Add cart</a>
                </div>
            </div>
        </div>
        <div class="card" style="width: 12rem; height: 357px;">
            <img src="../img/sp1.webp" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title small">Bàn Sofa – Bàn Cafe – Bàn Trà Gỗ Cao Su Trắng</h5>
                <p class="card-text">549.000đ</p>
                <div class="d-flex gap-1">
                    <a href="#" class="btn btn-primary btn-sm">Buy</a>
                    <a href="#" class="btn btn-primary btn-sm">Add cart</a>
                </div>
            </div>
        </div>
        <div class="card" style="width: 12rem; height: 357px;">
            <img src="../img/sp1.webp" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title small">Bàn Sofa – Bàn Cafe – Bàn Trà Gỗ Cao Su Trắng</h5>
                <p class="card-text">549.000đ</p>
                <div class="d-flex gap-1">
                    <a href="#" class="btn btn-primary btn-sm">Buy</a>
                    <a href="#" class="btn btn-primary btn-sm">Add cart</a>
                </div>
            </div>
        </div>
        <div class="card" style="width: 12rem; height: 357px;">
            <img src="../img/sp1.webp" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title small">Bàn Sofa – Bàn Cafe – Bàn Trà Gỗ Cao Su Trắng</h5>
                <p class="card-text">549.000đ</p>
                <div class="d-flex gap-1">
                    <a href="#" class="btn btn-primary btn-sm">Buy</a>
                    <a href="#" class="btn btn-primary btn-sm">Add cart</a>
                </div>
            </div>
        </div> -->
    </div>
</div>