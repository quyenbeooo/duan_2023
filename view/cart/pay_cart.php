<style>
  form {
    width: 100%;
    display: flex;
    justify-content: center;
    padding: 25px;
  }

  .pay_sum {
    width: 80%;
    border: 1px solid gray;
    padding: 92px;
    border-radius: 20px;
  }

  .custom-input-group {
    margin: 15px;
  }
</style>
<form action="../view/index.php?act=pay_cart_comfirm" method="post">
  <?php
  if (isset($_SESSION['name']) && is_array($_SESSION['name'])) {
    $name = isset($_SESSION['name']['user']) ? $_SESSION['name']['userten'] : '';
    $adres = isset($_SESSION['name']['adress']) ? $_SESSION['name']['adress'] : '';
    $phone = isset($_SESSION['name']['tel']) ? $_SESSION['name']['tel'] : '';
    $mail = isset($_SESSION['name']['email']) ? $_SESSION['name']['email'] : '';
    var_dump($name,$adres,$phone,$mail);
  } else {
    $name = '';
    $adres = '';
    $phone = '';
    $mail = '';
  }
  ?>
  <div class="pay_sum">
    <h2 style=" text-align: center;">Thanh toán</h2>
    <div class="input-group flex-nowrap custom-input-group ">
      <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-user"></i></span>
      <input type="text" class="form-control" name="userten" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" value="<?=  $name ?>">
    </div>
    <div class="input-group flex-nowrap custom-input-group">
      <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-location-dot"></i></span>
      <input type="text" class="form-control" name="diachi"  placeholder="Địa  chỉ"  aria-describedby="addon-wrapping">
    </div>
    <div class="input-group flex-nowrap custom-input-group">
      <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-phone"></i></span>
      <input type="text" class="form-control" name="sodienthoai"  placeholder="Số điện thoại"  aria-describedby="addon-wrapping">
    </div>
    <div class="input-group flex-nowrap custom-input-group">
      <span class="input-group-text" id="addon-wrapping"><i class="fa-regular fa-envelope"></i></span>
      <input type="text" class="form-control" name="mail"  placeholder="Email"  aria-describedby="addon-wrapping">
    </div>
    <h6 style="margin-top: 20px;">Phương thức thanh toán</h6>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="pttt" id="inlineRadio1" value="Thanh toán khi nhận hàng">
      <label class="form-check-label" for="inlineRadio1">Thanh toán khi nhận hàng</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="pttt" id="inlineRadio2" value="Thanh toán bằng VNpay">
      <label class="form-check-label" for="inlineRadio2">Thanh toán bằng VNpay</label>
    </div>
    <h6 style="margin-top: 20px;">Thông tin đơn hàng</h6>
    <div class="view_cart">
    <?php
     viewcart();
    ?>
    </div><br>
    <div class="modal-footer">
      <button type="submit" class="btn btn-primary w-100" name="pay">Thanh toán</button>
    </div>
  </div>
</form>