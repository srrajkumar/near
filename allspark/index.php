<?php include('../includes/_config.php');
$meta_title="";
$meta_desc="";
$meta_keywords="";
?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<html>
<head>
	<?php include('../includes/_head.php'); ?>
    <style type="text/css">
    .navbar-brand .near-logo{fill:#ffffff !important;}
    .navbar-brand .a-logo{fill:#ffffff !important;}
    .navbar .nav ul li a, .banner-content span:nth-child(6){
        color: #fff;
    }
    .s-header__trigger-icon{
        background:#fff;
    }
    .banner-content span {
    color: #fff !important;
    text-transform: uppercase;
    font-size: 65px;
    font-weight: 200;
    line-height: 70px;
    }
    .navbar.shrink {
        background: rgba(3, 20, 40, 0.85);
    }
</style>
<link rel="stylesheet" type="text/css" href="<?php CSS_PATH('allspark.css'); ?>">
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
</head>

<body>
	<?php include('../includes/_navigation.php'); ?>

	<?php include('container.php'); ?>

	<?php include('../includes/_footer.php'); ?>
</body>
	<?php include('../includes/_java_scripts.php'); ?>
	
</html>


