<?php include('../includes/_config.php');
$meta_title="";
$meta_desc="";
$meta_keywords="";
$heading ="Allspark";
$content= "Telecommunications";
$content1=" ";
$image=  "allspark/allspark-telco-1.png";
$image2="allspark/allspark-telco-2.png";
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
<style>.allspark-inner .line_break1{display:none;}</style>
</head>
<body>
<div class="preloader"></div>
	<?php include('../includes/_navigation.php'); ?>
    <div class="col-lg-12  k carousel-custom" style="background-color: #fafafa; " data-particles='{"color":"#a2a2a2"}'> 
<div class="banner-space container allspark-space"></div>

<div class="container allspark-inner">
 <div class="row">
  
  <div class="col-lg-12 col-sm-12">

  <div class="d-md-block "   id="box-one"  style="margin-bottom: 40px; text-align: center; margin-top: 50px;">
          <h1 style="font-weight: 400; font-size: 42px;"><?php echo $heading; ?> <span style="color:#5C5C5C;">for</span></h1>
          <p style="font-size: 32px; margin-bottom: 15px;"><?php echo $content; ?></p>
           <span class="line_break1 color-red"></span>
          <p style="font-size: 16px; color: #444;"><?php echo $content1; ?></p>
          <a href="<?php echo SITE_URL; ?>allspark/signup.php" class="button button--primary button--rounded" style="margin-left: 0;">SETUP A DEMO</a>
        </div>
  <div class="carsousel-banner">
        <div id="bootstrap-touch-slider" class="carousel bs-slider fade carousel-fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000" >
          <!-- Wrapper For Slides -->
          <div class="carousel-inner" role="listbox">
              <div class="item active">
                <!-- Slide Background -->
                <img class="parallax_effect" src="<?php IMAGE($image); ?>" alt=""/>

              </div>
             <div class="item ">
                <!-- Slide Background -->
                <img class="parallax_effect" src="<?php IMAGE($image2); ?>" alt=""/>

              </div>  
            </div>
             <!-- End of Wrapper For Slides -->
                  <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
           
            <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div> <!-- End  bootstrap-touch-slider Slider -->
    </div>
  </div>  
 </div>
</div>
<div class="banner-space container allspark-space"></div>


  <div class="mouse"></div>
  <div class="animation-wrapper">
    <div class="particle particle-1"></div>
    <div class="particle particle-2"></div>
    <div class="particle particle-3"></div>
    <div class="particle particle-4"></div>
  </div>
</div>
	
<div class="container container--fixed top-spacer allspark-subpages" style="padding: 100px 0">
            <div class="row" style="margin: 0;">
                <div class="col col-md-3">

                    <!-- Side Menu -->
                    

 <?php include('allspark-sidebar.php'); ?>
</div>
                <div class="col col-md-9">
                <div class="col col-md-12 custom-banner row perspective" style="padding:0; margin: 0;">
                    <div class="col-md-4" data-aos="3dflip" data-aos-delay="200" style="background:#000">
                    <img src="<?php IMAGE('research/telco-internet-usage-statistics.png') ?>" alt="" class="sq-ratio">
                     <span class="tile__content">
                            <h4>Global Internet Usage Statistics </h4>
                            <hr />
                            <p class="description">
                             Research
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
                <h1>Telecommunication players </h1>
                <h2>can use Allspark to:</h2>
                <div class="space"></div>
                <div class="row allspark-container" style="margin: 0; padding:0 ">
                <div class="col-md-6 row" >
                    <div class="col-md-4">
                        <img src="<?php IMAGE('allspark/telco/icon-1.png') ?>" />
                    </div>
                    <div class="col-md-8 subcontent">
                        <span class="blue">Curate</span> their audience segments and reach them in real-time, across channels  
                    </div>
                </div>
                <div class="col-md-6 row">
                    <div class="col-md-4">
                        <img src="<?php IMAGE('allspark/telco/icon-2.png') ?>" />
                    </div>
                    <div class="col-md-8 subcontent">
                        <span class="blue">Understand</span> the behaviour of their audience in the digital and physical world, by mapping their journey with data from channels including mobile, desktops and tablets
                    </div>
                </div>
                <div class="col-md-6 row">
                    <div class="col-md-4">
                        <img src="<?php IMAGE('allspark/telco/icon-3.png') ?>" />
                    </div>
                    <div class="col-md-8 subcontent">
                        <span class="blue">Get</span> deep insights of the audience that walks into their own and competitor stores such as demography, audience types, visitation rate, peak visitation day and time etc
                    </div>
                </div>
                <div class="col-md-6 row">
                    <div class="col-md-4">
                        <img src="<?php IMAGE('allspark/telco/icon-4.png') ?>" />
                    </div>
                    <div class="col-md-8 subcontent">
                        <span class="blue">Get</span> insights on consumers that are connected to WiFi and Cellular Data such as usage patterns, devices used, telco operator and browsing patterns
                    </div>
                </div>
                 <div class="col-md-6 row">
                    <div class="col-md-4">
                        <img src="<?php IMAGE('allspark/telco/icon-5.png') ?>" />
                    </div>
                    <div class="col-md-8 subcontent">
                        <span class="blue">Ingest</span> their own datasets such as CRM data into Allspark to get an enhanced, unified view of their consumers across locations  
                    </div>
                </div>
                <div class="col-md-6 row">
                    <div class="col-md-4">
                        <img src="<?php IMAGE('allspark/telco/icon-6.png') ?>" />
                    </div>
                    <div class="col-md-8 subcontent">
                        <span class="blue">Get</span> Allspark data through DaaS APIs for data-driven decisions in merchandising, staffing and other business operations 
                    </div>
                </div>
                <div class="col-md-6 row">
                    <div class="col-md-4">
                        <img src="<?php IMAGE('allspark/telco/icon-7.png') ?>" />
                    </div>
                    <div class="col-md-8 subcontent">
                        <span class="blue">Understand</span> the touchpoints (Mobile/Tablets/Desktop/OOH) that influence consumer walk-ins, and be smarter with mapping consumer journeys
                    </div>
                </div>
                <div class="col-md-6 row">
                    <div class="col-md-4">
                        <img src="<?php IMAGE('allspark/telco/icon-8.png') ?>" />
                    </div>
                    <div class="col-md-8 subcontent">
                        <span class="blue">Understanding</span> switching patterns of consumers between telco players  
                    </div>
                </div>
                </div>
               
                <a href="#" class="button button--primary button--rounded">SETUP A DEMO</a>
                <div class="space"></div>
                <hr />

               <?php include('other-industries.php'); ?>

        </div>
    </div>
</div>
	<?php include('../includes/_footer.php'); ?>
    <?php include('../includes/_java_scripts.php'); ?>
    <script>
     window.onload = function() {
  document.getElementById('telco').className = 'active';
document.getElementById('verticals').className = 'active';
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


