<?php include('../includes/_config.php');
$meta_title="";
$meta_desc="";
$meta_keywords="";
$heading ="Allspark";
$content= "Omni-channel Customer Experience";
$content1="Identify and reach your audience across channels";
$image=  "allspark/allspark-omni-channel.png";

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
                <div class="col col-md-12 custom-banner row perspective" style="padding:0; margin: 0;">
                	<div class="col-md-4" data-aos="3dflip" data-aos-delay="200">
                    <img src="<?php IMAGE('whitepaper/omni-channel-spacetime-marketing.png') ?>" alt="" class="sq-ratio">
                    <span class="tile__content">
                            <h4>Spacetime Marketing</h4>
                            <hr />
                            <p class="description">
                             Whitepaper
                            </p>
                        </span>
                            <a href="#" class="custom_btn">
                                <span class="btn__text">
                                    <span class="btn__text-inner">Download</span>
                                </span>            
                                <div class="icon">
                                    <svg class="" viewBox="0 0 18 7" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14,3.09H0" fill="#fff"></path>
                                        <polyline class="color_change" points="11.34 5.83 13.97 3.09 11.34 0.35" fill="#fff"></polyline>
                                    </svg>
                                </div>
                            </a>
                    
                	
                	</div>
                	
                </div>
                
                
                <div class="space"></div>
                <h1>Enterprises, Brands and Agencies</h1>
                <h2> can use Allspark for providing an omni-channel customer experience by:</h2>
                <div class="space"></div>
                <div class="row allspark-container" style="margin: 0; padding:0 ">
                <div class="col-md-6 row" >
	                <div class="col-md-4">
	                	<img src="<?php IMAGE('allspark/omni-channel/icon-1.png') ?>" />
	                </div>
	                <div class="col-md-8 subcontent">
	                	<span class="blue">Mapping</span> consumer journeys in the digital and physical world, and getting insight into the right touchpoints for your target audience
	                </div>
                </div>
                <div class="col-md-6 row">
	                <div class="col-md-4">
	                	<img src="<?php IMAGE('allspark/omni-channel/icon-2.png') ?>" />
	                </div>
	                <div class="col-md-8 subcontent">
	                	<span class="blue">Reaching</span> your audience on the right channels, and continuing your brand story across media
	                </div>
                </div>
                <div class="col-md-6 row">
	                <div class="col-md-4">
	                	<img src="<?php IMAGE('allspark/omni-channel/icon-3.png') ?>" />
	                </div>
	                <div class="col-md-8 subcontent">
	                	<span class="blue">Measuring</span> which channels work best for your target audience, and optimise marketing spends
	                </div>
                </div>
               
                </div>
                <a href="#" class="button button--primary button--rounded">SETUP A DEMO</a>
                <div class="space"></div>
                <hr />

                <?php include('inside-usecases.php'); ?>

        </div>
    </div>
</div>
	<?php include('../includes/_footer.php'); ?>
    <?php include('../includes/_java_scripts.php'); ?>
    <script>
     window.onload = function() {
  document.getElementById('occe').className = 'active';
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


