<?php include('includes/_config.php');
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
	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><?php echo $meta_title; ?></title>
	<meta name="title" content="<?php echo $meta_title; ?>">
	<meta name="description" content="<?php echo $meta_desc; ?>">
	<meta name="author" content="Near">
    <meta name="KEYWORDS" content="<?php echo $meta_keywords; ?>" />
    <link rel="stylesheet" href="<?php CSS(); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Roboto:100,300,400,500,700,900" rel="stylesheet">
    <script src="<?php JS('modernizr.js'); ?>"></script>
    <!-- Favicons
	================================================== -->
	<link rel="apple-touch-icon" sizes="57x57" href="<?php IMAGE('apple-touch-icon-57x57.png');?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php IMAGE('apple-touch-icon-60x60.png');?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php IMAGE('apple-touch-icon-72x72.png');?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php IMAGE('apple-touch-icon-76x76.png');?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php IMAGE('apple-touch-icon-114x114.png');?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php IMAGE('apple-touch-icon-120x120.png');?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php IMAGE('apple-touch-icon-144x144.png');?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php IMAGE('apple-touch-icon-152x152.png');?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php IMAGE('apple-touch-icon-180x180.png');?>">
    <link rel="icon" type="image/png" href="<?php IMAGE('favicon-32x32.png');?>" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php IMAGE('android-chrome-192x192.png');?>" sizes="192x192">
    <link rel="icon" type="image/png" href="<?php IMAGE('favicon-96x96.png');?>" sizes="96x96">
    <link rel="icon" type="image/png" href="<?php IMAGE('favicon-16x16.png');?>" sizes="16x16">
</head>

<body>
	<?php include('includes/_navigation.php'); ?>

	<?php include('home.php'); ?>

	<?php include('includes/_footer.php'); ?>
</body>
	<?php include('includes/_java_scripts.php'); ?>
</html>