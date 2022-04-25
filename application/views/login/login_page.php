<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- font awesome 5 -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.min.css'; ?>">

  <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/main.css'; ?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/toastr.css' ?>">

</head>
<body>
  <div id="login-page">
    <div class="wrapper fadeInDown">
      <div id="formContent">
        <!-- Tabs Titles -->
        <br>
        <!-- Login Form -->
        <form action="<?php echo base_url('home/validate') ?>" method="post">
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

<script src="<?php echo base_url() . 'assets/js/main.js'; ?>"></script>
<script src="<?php echo base_url() . 'assets/js/custom.js'; ?>"></script>
<script src="<?php echo base_url() . 'assets/js/toastr.min.js'; ?>"></script>

<?php if ($this->session->flashdata('flash_message') != "") : ?>

<script type="text/javascript">
	toastr.success('<?php echo $this->session->flashdata("flash_message"); ?>');
</script>

<?php endif; ?>

<?php if ($this->session->flashdata('error_message') != "") : ?>

<script type="text/javascript">
	toastr.error('<?php echo $this->session->flashdata("error_message"); ?>');
</script>

<?php endif; ?>
</body>
</html>