<div class="sum_form_login">
  <form action="index.php?act=login_ad" method="post" class="form_login">
    <div class="logo_dk" style="display: flex;justify-content: center; ">
      <img src="../img/logo-removebg-preview.png" alt="" style="width: 100px; ">
    </div>
    <h2 style="text-align: center;">Admin</h2>

    <div class="login">
      <label for="name"><b>Username</b></label><br>
      <input class="name" type="text" placeholder="Enter Username" name="username_ad" value=""><br>
      <span></span><br>

      <label for="psw"><b>Password</b></label><br>
      <input class="pass" type="password" placeholder="Enter Password" name="psw_ad" value=""><br>
      <span></span>

      <button type="submit" name="login_ad">Login</button>
      <button type="submit"><a href="" style="color: white; text-decoration: none;">Sign</a></button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>

  </form>
</div>