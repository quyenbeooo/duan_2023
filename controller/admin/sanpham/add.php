<?php
  $sql = "SELECT * FROM danhmuc";
  $category_list = pdo_query($sql);
?>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <form action="../admin/indexad.php?act=themsp" method="post" class="w-100" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Tên Sản Phẩm</label>
      <input type="text" class="form-control" name="name">
    </div>
    <div class="mb-3">
      <label for="formFile" class="form-label">Ảnh Sản Phẩm</label>
      <input class="form-control" type="file" id="formFile" name="img_file">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Giá Sản Phẩm</label>
      <input type="text" class="form-control" name="price">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Mô Tả</label>
      <input type="text" class="form-control" name="mota">
    </div>
    <div class="mb-3">
      <select class="form-select" name="iddm">
        <?php
        foreach ($category_list as  $value) {
        ?>
          <option value="<?= $value['id_category'] ?>"><?= $value['name']?></option>
        <?php } ?>
      </select>
    </div>

    <button type="submit" class="btn btn-primary" class="text-dark" name="add" id="addProductBtn"> Thêm sản phẩm</button>
  </form>
</nav>