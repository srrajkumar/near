<?php include('../includes/_config.php');
$meta_title="";
$meta_desc="";
$meta_keywords="";
$heading ="Allspark";
$content= "Out-of-Home Analytics";
$content1="Make intelligent decisions for your outdoor marketing strategy";
$image=  "allspark/allspark-ooh-analytics.png";

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
<body>
<div class="preloader"></div>
	<?php include('../includes/_navigation.php'); ?>
	<?php include('innerpage-banner.php'); ?>
<div class="container container--fixed top-spacer allspark-subpages" style="padding: 100px 0">
            <div class="row" style="margin: 0;">
                <div class="col col-md-3">

                    <!-- Side Menu -->
                    

 <?php include('allspark-sidebar.php'); ?>
</div>
                <div class="col col-md-9">
                <div class="space" style="padding:13px;"></div>
                <h1>ENTERPRISES, BRANDS, AGENCIES AND OUT-OF-HOME PLAYERS</h1>
                <h2>can use Allspark to:</h2>
                <div class="space"></div>
                <div class="row allspark-container" style="margin: 0; padding:0 ">
                <div class="col-md-6 row" >
                    <div class="col-md-4">
                        <img src="<?php IMAGE('allspark/ooh-analytics/icon-1.png') ?>" />
                    </div>
                    <div class="col-md-8 subcontent">
                        <span class="blue">Understand</span> the audience at each OOH site, and select the right site for the campaign.
                    </div>
                </div>
                <div class="col-md-6 row">
                    <div class="col-md-4">
                        <img src="<?php IMAGE('allspark/ooh-analytics/icon-2.png') ?>" />
                    </div>
                    <div class="col-md-8 subcontent">
                        <span class="blue">Understand</span> the audience their competitors are hitting with their OOH sites.
                    </div>
                </div>
                <div class="col-md-6 row">
                    <div class="col-md-4">
                        <img src="<?php IMAGE('allspark/ooh-analytics/icon-3.png') ?>" />
                    </div>
                    <div class="col-md-8 subcontent">
                        <span class="blue">Continue</span> their OOH story with real-time and audience targeting over digital devices.
                    </div>
                </div>
                <div class="col-md-6 row">
                    <div class="col-md-4">
                        <img src="<?php IMAGE('allspark/ooh-analytics/icon-5.png') ?>" />
                    </div>
                    <div class="col-md-8 subcontent">
                        <span class="blue">Get</span> apowerful analytics on the kind of audience engaging with their OOH campaigns.
                    </div>
                </div>
                <div class="col-md-6 row">
                    <div class="col-md-4">
                        <img src="<?php IMAGE('allspark/ooh-analytics/icon-4.png') ?>" />
                    </div>
                    <div class="col-md-8 subcontent">
                        <span class="blue">Measure</span> attribution of their OOH campaigns, and how well these campaigns work together with other media.
                    </div>
                </div>
                 
                </div>
               
                <a href="<?php echo SITE_URL; ?>allspark/signup.php" class="button button--primary button--rounded">SETUP A DEMO</a>
               <div class="top space"></div>
                <hr />

                <?php include('inside-usecases.php'); ?>

        </div>
    </div>
</div>
	<?php include('../includes/_footer.php'); ?>
    <?php include('../includes/_java_scripts.php'); ?>
    <script>
     window.onload = function() {
  document.getElementById('ooh').className = 'active';
document.getElementById('usecases').className = 'active';
};
   $(document).ready(function() {
    $(window).on('scroll', function() {
        var st = $(this).scrollTop();
        
        $('#box-one').css({
            'transform': 'translateY('+ (st/2) +'px)'
        });
    });
});
    </script>
    
</body>
</html>


