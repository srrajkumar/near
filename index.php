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
    <link rel="stylesheet" href="<?= CSS ?>" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Roboto:100,300,400,500,700,900" rel="stylesheet">
    <script src="<?= JS ?>modernizr.js"></script>
</head>

<body>
	<?php include('includes/_navigation.php'); ?>

	<?php include('home.php'); ?>

	<?php include('includes/_footer.php'); ?>
</body>
	<?php include('includes/_java_scripts.php'); ?>
</html>