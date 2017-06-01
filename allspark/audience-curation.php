<?php include('../includes/_config.php');
$meta_title="";
$meta_desc="";
$meta_keywords="";
$heading ="Allspark";
$content= "Audience Curation";
$content1="Set custom rules to curate your audience";
$image=  "allspark/allspark-audience-curation.png";

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
<style>.carousel-control{display:none !important;} </style>
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
                    <a href="#" class="col-md-4" data-aos="3dflip" data-aos-delay="200" style="background:#000">
                    <img src="<?php IMAGE('research/lactacyd.png') ?>" alt="" class="sq-ratio">
                     <span class="tile__content">
                            <h4>Audience Curation</h4>
                            <hr />
                            <p class="description">
                             Video
                            </p>
                        </span>
                            <span class="custom_btn">
                                <span class="btn__text">
                                    <span class="btn__text-inner">Download</span>
                                </span>            
                                <div class="icon">
                                    <svg class="" viewBox="0 0 18 7" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14,3.09H0" fill="#fff"></path>
                                        <polyline class="color_change" points="11.34 5.83 13.97 3.09 11.34 0.35" fill="#fff"></polyline>
                                    </svg>
                                </div>
                            </span>
                   
                   
                    </a>
                    
                </div>

                <div class="space" style="padding:13px;"></div>
                <h1>Enterprises, Brands and Agencies can use Allspark</h1>
                <h2>to curate their audience of choice in real-time:</h2>
                <div class="space"></div>
                <div class="row allspark-container" style="margin: 0; padding:0 ">
                <div class="col-md-6 row" >
                    <div class="col-md-4">
                        <img src="<?php IMAGE('allspark/audience-curation/icon-1.png') ?>" alt />
                    </div>
                    <div class="col-md-8 subcontent">
                        <span class="blue">With</span> unique datasets including spend, demography, place visitation history, audience nature and content.
                    </div>
                </div>
                <div class="col-md-6 row">
                    <div class="col-md-4">
                        <img src="<?php IMAGE('allspark/audience-curation/icon-2.png') ?>" alt />
                    </div>
                    <div class="col-md-8 subcontent">
                       <span class="blue">With</span> granular rules such as visitation frequency, distance from a store, time of the day and day of the week.
                    </div>
                </div>
                <div class="col-md-6 row">
                    <div class="col-md-4">
                        <img src="<?php IMAGE('allspark/audience-curation/icon-3.png') ?>"  alt/>
                    </div>
                    <div class="col-md-8 subcontent">
                        <span class="blue">With</span> ease of applying combinations of OR, AND and NOT to various audiences and places.
                    </div>
                </div>
                <div class="col-md-6 row">
                    <div class="col-md-4">
                        <img src="<?php IMAGE('allspark/audience-curation/icon-4.png') ?>" alt />
                    </div>
                    <div class="col-md-8 subcontent">
                        
                         <span class="blue">With</span> datasets from users across devices Smartphones, Tablets and Desktops.
                    </div>
                </div>
                </div>
                <a href="<?php echo SITE_URL; ?>allspark/signup.php" class="button button--primary button--rounded">SETUP A DEMO</a>
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
  document.getElementById('ac').className = 'active';
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


