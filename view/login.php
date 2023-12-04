<?php
$nameer = "";
$paser = "";
if (isset($_POST['login'])) {
   $usernem = $_POST['username'];
   $pass = $_POST['psw'];

   if (empty($usernem)) {
    $nameer = "Không được để trống tài khoản";
   } elseif ($usernem <= 3) {
    $nameer = "Tài khoản ít nhất dài trến 3 kí tự";
   }

   if (empty($pass)) {
    $paser = "Không được để trống mật khẩu";
   }
}
?>
<div class="sum_form_login">
  <form action="index.php?act=dn" method="post" class="form_login">
    <div class="logo_dk" style="display: flex;justify-content: center; ">
      <img src="../img/logo-removebg-preview.png" alt="" style="width: 100px; ">
    </div>
    <h2 style="text-align: center;">Đăng Nhập</h2>

    <div class="login">
      <label for="name"><b>Username</b></label><br>
      <input class="name" type="text" placeholder="Enter Username" name="username" value=""><br>
      <span style="color: red;"><?php echo $nameer ?></span><br>

      <label for="psw"><b>Password</b></label><br>
      <input class="pass" type="password" placeholder="Enter Password" name="psw" value=""><br>
      <span  style="color: red;"><?php echo $paser ?></span><br>

      <button type="submit" name="login" >Login</button>
      <button type="submit"><a href="" style="color: white; text-decoration: none;">Sign</a></button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>

  </form>
</div>