<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?></title>
    <?php include 'includes_top.php';?>
</head>
<body>
    
<?php
    if($this->session->userdata('is_login') == 1):
?>  <div class="wrapper">
        <?php include 'header.php' ?>
        <?php include 'navigation.php' ?>
                    <!-- BEGIN PlACE PAGE CONTENT HERE -->
        <?php include 'admin/'.$page_name.'.php';?>
                    <!-- END PLACE PAGE CONTENT HERE -->
    </div>
<?php   
    endif;
	include 'footer.php';
?>
</body>
</html>