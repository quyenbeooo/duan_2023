<div class="alert alert-success" role="alert">
  Bạn đã đặt hàng thanh công
</div>
<?php
if (isset($list_bill) && (is_array($list_bill))) {
  extract($list_bill);
}
?>
<nav id="navbar-example2" class="navbar bg-body-tertiary px-3 mb-3">
  <a class="navbar-brand" href="#">Chi tiết đơn hàng</a>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link" href="#scrollspyHeading1">Mã đơn hàng</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#scrollspyHeading2">Thông tin sản phẩm</a>
    </li>
  </ul>
</nav>
<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
  <h4 id="scrollspyHeading1" style="color:goldenrod;">Đơn hàng</h4>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">Mã đơn hàng</th>
        <th scope="col">Ngày đăt hàng</th>
        <th scope="col">Phương thức thanh toán</th>
        <th scope="col">tổng</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"><?= $id ?></th>
        <td><?= $date_cart ?></td>
        <td><?= $pttt ?></td>
        <td><?= $thanhtien ?></td>
      </tr>
      
    </tbody>
  </table>
  <h4 id="scrollspyHeading2"  style=" color:goldenrod;">Thông tin đặt hàng</h4>
  <table class="table table-striped table-hover" border="1">
    <thead>
      <tr>
        <th scope="col">Khách hàng</th>
        <th scope="col">Địa chỉ</th>
        <th scope="col">Email</th>
        <th scope="col">Số điện thoại</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"><?= $ten ?></th>
        <td><?= $diachi ?></td>
        <td><?= $mail ?></td>
        <td> <?= $phone ?></td>
      </tr>
      
    </tbody>
  </table>
  <h4 id="scrollspyHeading2" style=" color:goldenrod;">Sản phẩm</h4>
  <?php
  viewcart()
  ?>
</div>