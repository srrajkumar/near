<?php include('../includes/_config.php');
$meta_title="";
$meta_desc="";
$meta_keywords="";
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
	<div id="particles-js" class="col-lg-12  k carousel-custom" style="background-color: #fafafa; " data-particles> 
<div class="banner-space container allspark-space"></div>

<div class="container allspark-inner">
 <div class="row">
  
  <div class="col-lg-9 col-sm-9">
  <div class="carsousel-banner">
        <div id="bootstrap-touch-slider" class="carousel bs-slider fade carousel-fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000" >
          <!-- Wrapper For Slides -->
          <div class="carousel-inner" role="listbox">
              <div class="item active">
                <!-- Slide Background -->
                <img src="<?php IMAGE('allspark/allspark-audience-curation.png'); ?>" alt="Allspark Audience Curation"/>
              </div>
              
            </div><!-- End of Wrapper For Slides -->
            <!-- Left Control -->
                  <!--a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
           
            <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a-->
        </div> <!-- End  bootstrap-touch-slider Slider -->
    </div>
  </div>  
  <div class="col-lg-3 col-sm-3">
  <div class="banner-space container"></div>
  <div class="banner-content allspark-page">
    <div class="d-md-block text-left"  style="margin-bottom: 20%;">
          <h1>Allspark for</h1>
          <p>Audience Curation</p>
          <span class="line_break1 color-red"></span>
          <p style="font-size: 16px; color: #444;">Set custom rules to curate your audience</p>
          <a href="#" class="button button--primary button--rounded" style="margin-left: 0;">SETUP A DEMO</a>
        </div>
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
                    <div class="col-md-4" data-aos="3dflip" data-aos-delay="200">
                    <span>
                        <h1>Audience Curation</h1>
                        <p>Whitepaper</p>
                    </span>
                    </div>
                    <div class="col-md-4" data-aos="3dflip" data-aos-delay="400" style="background-image:url('<?php IMAGE('allspark/banner-1.png') ?>'); background-size: cover;"></div>
                    <div class="col-md-4" style="background-color: #c1c1c1" data-aos="3dflip" data-aos-delay="600"></div>
                </div>
                <div class="space"></div>
                <h1>Enterprises, Brands and Agencies can use Allspark</h1>
                <h2>to curate their audience of choice in real-time:</h2>
                <div class="space"></div>
                <div class="row allspark-container" style="margin: 0; padding:0 ">
                <div class="col-md-6 row" >
                    <div class="col-md-4">
                        <img src="<?php IMAGE('allspark/audience-curation/icon-1.png') ?>" alt />
                    </div>
                    <div class="col-md-8 subcontent">
                        <span class="blue">with</span> unique data sets including spend, demography, place visitation history, audience nature and content.
                    </div>
                </div>
                <div class="col-md-6 row">
                    <div class="col-md-4">
                        <img src="<?php IMAGE('allspark/audience-curation/icon-2.png') ?>" alt />
                    </div>
                    <div class="col-md-8 subcontent">
                       <span class="blue">with</span> granular rules such as visitation frequency, distance from a store, time of the day and day of the week
                    </div>
                </div>
                <div class="col-md-6 row">
                    <div class="col-md-4">
                        <img src="<?php IMAGE('allspark/audience-curation/icon-3.png') ?>"  alt/>
                    </div>
                    <div class="col-md-8 subcontent">
                        <span class="blue">with</span> ease of applying combinations of OR, AND and NOT to various audiences and places
                    </div>
                </div>
                <div class="col-md-6 row">
                    <div class="col-md-4">
                        <img src="<?php IMAGE('allspark/audience-curation/icon-4.png') ?>" alt />
                    </div>
                    <div class="col-md-8 subcontent">
                        
                         <span class="blue">with</span> data sets from users across devices Smartphones, Tablets and Desktops
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
  document.getElementById('ac').className = 'active';
document.getElementById('usecases').className = 'active';
};

    
    </script>
    
</body>
</html>


