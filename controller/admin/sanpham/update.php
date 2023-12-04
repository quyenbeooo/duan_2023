<?php
  $sql = "SELECT * FROM danhmuc";
  $category_list = pdo_query($sql);
?>
<style>
  .custom-border {
    border: 1px solid #ced4da;
    height: 37px;
    border-radius: 4px;
  }
</style>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <form action="" method="post" class="w-100" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Tên Sản Phẩm</label>
      <input type="text" class="form-control" name="name_sp">
    </div>
    <div class="mb-3">
      <label for="formFile" class="form-label">Ảnh Sản Phẩm</label>
      <input class="form-control" type="file" id="formFile" name="img_file">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Giá Sản Phẩm</label>
      <input type="text" class="form-control" name="price_sp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Mô Tả</label>
      <input type="text" class="form-control" name="mota_sp">
    </div>  
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Danh Mục</label>
      <select class="form-select w-100 custom-border"  aria-label="Default select example" name="iddm">
        <?php
        foreach ($category_list as  $value) {
        ?>
          <option  value="<?= $value['id_category'] ?>"><?= $value['name']?></option>
        <?php } ?>
      </select>
    </div>

    <button type="submit" class="btn btn-primary" class="text-dark" name="submit_update"> Sửa sản phẩm</button>
  </form>
</nav>