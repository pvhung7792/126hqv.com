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
    if($this->session->userdata('is_login') == 1){

    }else{
        include 'login/'.$page_name.'.php';
    }

	include 'footer.php';
	?>
</body>
</html>