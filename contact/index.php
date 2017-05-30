<?php include('../includes/_config.php');
$meta_title="Contact Us | Near offices | Ambient Intelligence Platform";
$meta_desc="Reach out to us to know more about our platform and how our SaaS products can help you in your data-driven decisions. ";
$meta_keywords="Near Offices, Near Culture, Connected Data, Connected Environments, SaaS products, Near Leadership, Data products, DaaS API, Allspark, Carbon, Data Partnerships, Data-driven decisions, Omni-channel Marketing, Cross-device Data, Cross-screen Marketing.";
?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en"><![endif]-->
<html  lang="en">
<head>
	<?php include('../includes/_head.php'); ?>
 
<link rel="stylesheet" type="text/css" href="<?php CSS_PATH('allspark.css'); ?>">

</head>
<body  class="the-data">
<div class="preloader"></div>
	<?php include('../includes/_navigation.php'); ?>
	<?php include('container.php'); ?>
	<?php include('../includes/_footer.php'); ?>
  <?php include('../includes/_java_scripts.php'); ?>
 
<script type="text/javascript">
	//grabs the hash tag from the url
  var hash = window.location.hash;
  //checks whether or not the hash tag is set
  if (hash != "") {
    //removes all active classes from tabs
    $('.sidebar-nav-v1 li ul li').each(function() {
      $(this).removeClass('active');
    });
    $('.tab-content div').each(function() {
      $(this).removeClass('active');
    });
    //this will add the active class on the hashtagged value
    var link = "";
    $('.sidebar-nav-v1 li ul li').each(function() {
      link = $(this).find('a').attr('href');
      if (link == hash) {
        $(this).addClass('active');
      }
    });
    $('.tab-content div').each(function() {
      link = $(this).attr('id');
      if ('#'+link == hash) {
        $(this).addClass('active');
      }
    });
  }
</script>
</body>
</html>


