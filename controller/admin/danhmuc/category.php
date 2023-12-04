<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <form class="w-100" action="" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID Danh Mục</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tên Danh Mục</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="name_dm">
        </div>
        <button type="submit" class="btn btn-primary" name="add_category">Submit</button>
        <button type="submit" class="btn btn-primary" name="delete_category"><a href="../admin/indexad.php?act=list_category"  class='text-white'>Danh sách danh mục</a></button>
        <!-- <button type="submit" class="btn btn-primary" name="update_category">Danh sách danh mục</button>
        <button type="submit" class="btn btn-primary" name="update_category">Sửa</button> -->
    </form>
</nav>