<div id="login-page">
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
      <br>
      <!-- Login Form -->
      <form action="<?php echo base_url('login/validate') ?>" method="post">
        <input type="text" id="phone" class="fadeIn second" name="phone" placeholder="số điện thoại" required>
        <input type="password" id="password" class="fadeIn third" name="password" placeholder="mật khẩu" required>
        <input type="submit" class="fadeIn fourth" value="Đăng nhập">
      </form>

      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="<?php echo base_url('login/forgot_password') ?>">Quên mật khẩu</a>
      </div>

    </div>
  </div>
</div>