<?php include('../includes/_config.php');
$meta_title="Allspark | SaaS Product | OOH Analytics | Consumer Insights | Data-Driven Decisions | Omni-Channel Marketing";
$meta_desc="Allspark is a Mobile-first Audience Cloud that lets you visualize, engage and analyze audience data including their location, spend, behavior, demography and interest. Contact us at allspark@near.co to understand how Allspark, SaaS product by Near can help OOH industry in their media planning, data-driven marketing, business strategy and measurement.";
$meta_keywords="Allspark, SaaS product, Data Products, Audience Analytics, Consumer Insights, Consumer Research, Data Analytics, Data-Driven Marketing, Data-Driven Decisions, Omni-Channel Marketing, OOH Analytics, Cross-screen Marketing, Cross-screen Data, Location Data, CRM onboarding, Consumer Journeys, Consumer Dynamics, Offline Attribution, Attribution Analytics, ROI Measurement, Connected Data, Smart Environments, Real-World Behavior, Digital World, Location Analytics, Footfall Analytics, Media Planning, Actionable Insights, Marketing Strategy, Competitor Insights, Competitor Consumers, ROI Measurement, Attribution Lift Index, Consumer Walk-ins, OOH locations, Media Measurement";
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
<div class="preloader">
  <?php include('../includes/preloader.php'); ?>
</div>
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
                        <img src="<?php IMAGE('bb.png') ?>" style="background:url(<?php IMAGE('allspark/ooh-analytics-icons.png');?>); background-position: 0 0; background-size: 100% auto; width: 103px; height: 103px;" alt />
                    </div>
                    <div class="col-md-8 subcontent">
                        <span class="blue">Understand</span> the audience at each OOH site, and select the right site for the campaign.
                    </div>
                </div>
                <div class="col-md-6 row">
                    <div class="col-md-4">
                        <img src="<?php IMAGE('bb.png') ?>" style="background:url(<?php IMAGE('allspark/ooh-analytics-icons.png');?>); background-position: 0 420px; background-size: 100% auto; width: 103px; height: 103px;" alt />
                    </div>
                    <div class="col-md-8 subcontent">
                        <span class="blue">Understand</span> the audience their competitors are hitting with their OOH sites.
                    </div>
                </div>
                <div class="col-md-6 row">
                    <div class="col-md-4">
                        <img src="<?php IMAGE('bb.png') ?>" style="background:url(<?php IMAGE('allspark/ooh-analytics-icons.png');?>); background-position: 0 315px; background-size: 100% auto; width: 103px; height: 103px;" alt  />
                    </div>
                    <div class="col-md-8 subcontent">
                        <span class="blue">Continue</span> their OOH story with real-time and audience targeting over digital devices.
                    </div>
                </div>
                <div class="col-md-6 row">
                    <div class="col-md-4">
                        <img src="<?php IMAGE('bb.png') ?>" style="background:url(<?php IMAGE('allspark/ooh-analytics-icons.png');?>); background-position: 0 95px; background-size: 100% auto; width: 103px; height: 103px;" alt  />
                    </div>
                    <div class="col-md-8 subcontent">
                        <span class="blue">Get</span> powerful analytics on the kind of audience engaging with their OOH campaigns.
                    </div>
                </div>
                <div class="col-md-6 row">
                    <div class="col-md-4">
                        <img src="<?php IMAGE('bb.png') ?>" style="background:url(<?php IMAGE('allspark/ooh-analytics-icons.png');?>); background-position: 0 200px; background-size: 100% auto; width: 103px; height: 103px;" alt  />
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


