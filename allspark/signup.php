<?php include("../includes/_config.php"); 
$meta_title="Sign up for Allspark | Data-Driven Marketing | SaaS product by Near";
$meta_desc="Allspark is a Mobile-First Audience Cloud that lets brands visualize, engage and analyze audience data including their location, behavior, demography and interest. Sign up today to get realworld consumer insights, target and run personalized campaign, measure attribution & ROI.";
$meta_keywords="Data-Driven Marketing, Attribution Analytics, Consumer Insights, Audience Data, Location-based Marketing, SaaS Product, Data Products, Audience Analytics, Attribution Measurement, ROI Measurement";
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
	
	<style type="text/css">
	  .loader{background:transparent; margin-left: 5px;}
		#message{color:#e9262d; text-align: center;}
	</style>
  
</head>

<body  class="the-data">

<div class="preloader">
  <?php include('../includes/preloader.php'); ?>
</div>
	<nav class="navbar navbar-toggleable-md s-header js__header-sticky js__header-overlay fixed-top">
  <div class="container">
    <a class="navbar-brand" href="<?php echo SITE_URL; ?>">
      <svg version="1.1" x="0px" y="0px" viewBox="0 0 491.1 145.6" xml:space="preserve">
        <polygon class="near-logo" points="447.4,126.7 451,126.7 451,136.4 452.6,136.4 452.6,126.7 456.2,126.7 456.2,125.2 447.4,125.2 "></polygon>
        <polygon class="near-logo" points="463.6,133.7 463.5,133.7 459.9,125.2 457.7,125.2 457.7,136.4 459.2,136.4 459.2,127.2 459.2,127.2 
                 463,136.4 464,136.4 467.8,127.2 467.8,127.2 467.8,136.4 469.4,136.4 469.4,125.2 467.1,125.2 "></polygon>
        <path class="a-logo" d="M298.8,74.8L298.8,74.8c0-20.9,16.9-37.8,37.8-37.8c20.9,0,37.8,16.9,37.8,37.8c0,20.9-16.9,37.7-37.8,37.7
              C315.7,112.6,298.8,95.7,298.8,74.8 M398,74.8c0-33.8-27.5-61.3-61.4-61.3c-33.8,0-61.3,27.4-61.3,61.3c0,33.8,27.4,61.3,61.3,61.3
              h42.7c19.4,0,18.6-19.6,18.6-19.6V74.8z"></path>
        <path class="near-logo" d="M107.5,126.2c0,5.4,4.8,10.2,11.8,10.2c6.6,0,11.8-5,11.8-11.6V75c0-33.8-27.4-61.3-61.3-61.3
              C36.1,13.7,8.7,41.2,8.7,75v51.2c0,5.4,4.8,10.2,11.8,10.2c6.6,0,11.8-5,11.8-11.6V75h0c0-20.8,16.8-37.6,37.6-37.6
              c20.8,0,37.6,16.8,37.6,37.6h0V126.2z"></path>
        <path class="near-logo" d="M237.2,64.7h-33.5C198,64.7,193,69.3,193,75c0,5.7,4.9,10.2,10.6,10.2H249c4,0,7.5-2.1,10-5.2
              c0,0,10-13.4,0.3-31.8c-9.9-20.4-31.5-34.5-55.7-34.5C169.8,13.7,143,41.1,143,75c0,33.8,26.8,61.2,60.6,61.2
              c16.6,0,32.3-6,43.4-16.8h0c4.6-4.6,4.6-12,0-16.6c-4.5-4.5-11.7-4.6-16.3-0.2l0,0c-6.8,6.6-16.7,10.3-27,10.3
              c-20.9,0-37.1-17.1-37.1-38s16.3-37.8,37.1-37.8c26.4,0,36,21.8,36,23.6C239.6,60.8,240.2,64.7,237.2,64.7"></path>
        <path class="near-logo" d="M471.3,13.6c-14.3,0-27.3,3.7-37.7,11.9c0-6.5-5.4-11.8-11.9-11.8c-6.5,0-11.7,5.2-11.8,11.6h0l0,49.5h0
              c0,0.1,0,0.3,0,0.4v50.9c0,5.4,4.8,10.3,11.9,10.3c6.6,0,11.9-5,11.9-11.7l0-49.5c0-20.8,16.9-37.9,37.7-37.8
              c6.6,0,11.9-5.3,11.9-11.9C483.2,19,477.8,13.6,471.3,13.6"></path>
        </svg>
    </a>
    <div class="nav nav-pills float-right">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo SITE_URL; ?>allspark">Allspark</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo SITE_URL; ?>data/">The Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo SITE_URL; ?>about/">About Us</a>
        </li>
        
      </ul>

    </div>
    </div>
     
    </nav>
     <!-- Overlay -->
     <div class="test-menu">
	<div class="checkBox">
  
      <div class="burger-box">
        <div id="burger-container">
          <div id="burger"><span> </span><span></span><span></span></div>
        </div>
      </div>
    </div>
 
	<div class="slide-menu">
	<p class="lang-button">
  <a target="_blank" class="eng active" href="<?php echo SITE_URL; ?>">EN</a>
  <a target="_blank" href="http://jp.near.co" style="display: inline-block; padding-left:0px;">JP</a>
  </p>
   <ul class="cd-navigation">
      <li class="item-has-children">
        <a href="#0">Allspark <hr/></a>
        <ul class="sub-menu">
          <li><a href="<?php echo SITE_URL; ?>allspark">Overview</a></li>
          <li class="item-has-children"><a href="#0">Use Cases</a>
          <ul class="sub-menu">
            <li><a href="<?php echo SITE_URL; ?>allspark/audience-curation.php">Audience Curation</a></li>
            <li><a href="<?php echo SITE_URL; ?>allspark/media-planning.php">Media Planning</a></li>
            <li><a href="<?php echo SITE_URL; ?>allspark/out-of-home-analytics.php">Out-of-Home Analytics</a></li>
            <li><a href="<?php echo SITE_URL; ?>allspark/offline-attribution.php">Offline Attribution</a></li>
            <li><a href="<?php echo SITE_URL; ?>allspark/consumer-research.php">Consumer Research</a></li>
            <li><a href="<?php echo SITE_URL; ?>allspark/omni-channel-customer-experience.php">Omni-Channel Experience</a></li>
          </ul>
          </li>
          <li class="item-has-children"><a href="#0">Industry </a>
            <ul class="sub-menu">
              <li><a href="<?php echo SITE_URL; ?>allspark/retail.php">Retail</a></li>
              <li><a href="<?php echo SITE_URL; ?>allspark/qsr.php">QSR</a></li>
              <li><a href="<?php echo SITE_URL; ?>allspark/telco.php">Telco</a></li>
              <li><a href="<?php echo SITE_URL; ?>allspark/auto.php">Auto</a></li>
              <li><a href="<?php echo SITE_URL; ?>allspark/bfsi.php">BFSI</a></li>
            </ul>
          </li>
        </ul>
      </li> <!-- item-has-children -->

      <li><a href="<?php echo SITE_URL; ?>data">The Data <hr/></a></li>
      <li class="item-has-children"><a href="#">About Us <hr/></a>
        <ul class="sub-menu">
          <li><a href="<?php echo SITE_URL; ?>about">Overview</a></li>
          <li><a href="<?php echo SITE_URL; ?>leadership">Leadership</a></li>
          <li><a href="<?php echo SITE_URL; ?>investors">Investors</a></li>
          <li><a href="<?php echo SITE_URL; ?>board">Board</a></li>
          <li class="item-has-children"><a href="#" >Culture</a>
            <ul class="sub-menu">
              <li><a href="<?php echo SITE_URL; ?>culture">Overview</a></li>
              <li><a href="<?php echo SITE_URL; ?>kyc/jils-joseph.php">Meet the Team</a></li>
            </ul>
          </li>
          <li class="item-has-children"><a href="#">Blog</a>
            <ul class="sub-menu">
              <li><a href="<?php echo SITE_URL; ?>blog">Corporate Blog</a></li>
              <li><a href="<?php echo SITE_URL; ?>engineering">Tech Blog</a></li>
            </ul>
          </li>
          <li><a href="<?php echo SITE_URL; ?>news">Newsroom</a></li>
          <li><a href="<?php echo SITE_URL; ?>events">Events</a></li>
        </ul>
      </li>
      <li><a href="<?php echo SITE_URL; ?>careers">Careers <hr/></a></li>
      <li><a href="<?php echo SITE_URL; ?>privacy">Privacy <hr/></a></li>
      <li><a href="<?php echo SITE_URL; ?>contact">Contact Us <hr/></a></li>
    </ul> <!-- cd-navigation -->


     <div class="cd-navigation socials">
         <p class="social-links">
          <a target="_blank" href="<?php echo TWITTER_ACCOUNT_URL ; ?>"><i class="fa fa-twitter"></i></a>
          <a target="_blank" href="<?php echo FACEBOOK_ACCOUNT_URL ; ?>"><i class="fa fa-facebook"></i></a>
          <a target="_blank" href="<?php echo LINKEDIN_ACCOUNT_URL ; ?>"><i class="fa fa-linkedin"></i></a>
          <a target="_blank" href="<?php echo YOUTUBE_ACCOUNT_URL ;?>"><img src="<?php IMAGE('youtube-icon.png'); ?>" style="width: 17px; height: auto;" /></a>
          </p>
       </div> <!-- socials -->
  </div>
</div>

<div class="col-lg-12  k carousel-custom the-data" style="background-color: #fafafa; " data-particles='{"color":"#a2a2a2"}'> 
	<div class="banner-space container allspark-space"></div>
  <div class="container aboutus banner">
   <div class="row">
      <div class="col-md-12" style="text-align: center;">
       <h1><div class="svg-allspark" style="width: 250px; display: inline-block; position: relative; top: 5px;">
                                <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 185 41" style="enable-background:new 0 0 185 41;" xml:space="preserve">
	<style type="text/css">
	.st0{fill:#3da4dc;}
	.st1{opacity:0.5;}
	.st2{fill:#38A5D2;}
	</style>
	<g>
	<g>
		<g>
			<g>
				<g>
					<path class="st0" d="M62.8,29.9h-3.9l-2.1-5.1h-9.9l-2.2,5.1h-3.8l9.2-21.1h3.4L62.8,29.9z M51.8,13.2l-3.6,8.4h7.2L51.8,13.2z
						"/>
					<path class="st0" d="M66.2,29.9V8h3.7v21.9H66.2z"/>
					<path class="st0" d="M74.7,29.9V8h3.7v21.9H74.7z"/>
					<path class="st0" d="M94,27.4c-0.3,0.6-0.7,1.1-1.2,1.5s-1.2,0.7-1.9,0.9c-0.7,0.2-1.5,0.3-2.3,0.3c-1.1,0-2.3-0.2-3.5-0.6
						s-2.3-1-3.3-1.8l1.6-2.5c0.9,0.6,1.7,1.1,2.6,1.5c0.9,0.3,1.7,0.5,2.6,0.5c0.8,0,1.4-0.2,1.8-0.5S91,26,91,25.5v-0.1
						c0-0.3-0.1-0.6-0.3-0.8c-0.2-0.2-0.5-0.4-0.8-0.6s-0.7-0.3-1.1-0.4s-0.9-0.3-1.3-0.4c-0.6-0.2-1.2-0.4-1.8-0.6
						c-0.6-0.2-1.1-0.5-1.6-0.9c-0.5-0.3-0.9-0.8-1.2-1.3c-0.3-0.5-0.4-1.1-0.4-1.9v-0.1c0-0.7,0.1-1.4,0.4-2s0.7-1.1,1.2-1.5
						s1.1-0.7,1.8-1c0.7-0.2,1.4-0.3,2.2-0.3c1,0,2,0.2,3,0.5s1.9,0.8,2.8,1.3L92.5,18c-0.8-0.5-1.5-0.8-2.3-1.1
						c-0.8-0.3-1.5-0.4-2.2-0.4s-1.2,0.2-1.6,0.5s-0.6,0.7-0.6,1.1v0.1c0,0.3,0.1,0.5,0.3,0.7c0.2,0.2,0.5,0.4,0.8,0.6
						s0.7,0.3,1.1,0.5c0.4,0.1,0.9,0.3,1.3,0.4c0.6,0.2,1.2,0.4,1.7,0.6c0.6,0.2,1.1,0.5,1.6,0.9s0.9,0.8,1.2,1.3
						c0.3,0.5,0.4,1.1,0.4,1.8v0.1C94.4,26.1,94.3,26.8,94,27.4z"/>
					<path class="st0" d="M113.9,25.5c-0.4,1-1,1.9-1.6,2.6c-0.7,0.7-1.5,1.2-2.4,1.6s-1.8,0.5-2.7,0.5c-1.3,0-2.4-0.3-3.2-0.8
						c-0.9-0.6-1.6-1.2-2.1-1.9v7.3h-3.7V14.1h3.7v2.6c0.6-0.8,1.3-1.5,2.2-2.1c0.9-0.6,1.9-0.9,3.2-0.9c0.9,0,1.8,0.2,2.7,0.5
						c0.9,0.4,1.7,0.9,2.3,1.6c0.7,0.7,1.2,1.6,1.7,2.6c0.4,1,0.6,2.2,0.6,3.5C114.5,23.3,114.3,24.5,113.9,25.5z M110.5,19.9
						c-0.2-0.6-0.6-1.2-1-1.6s-0.9-0.8-1.4-1c-0.6-0.2-1.1-0.4-1.8-0.4c-0.6,0-1.2,0.1-1.8,0.4c-0.6,0.2-1,0.6-1.5,1
						c-0.4,0.4-0.8,1-1,1.6c-0.3,0.6-0.4,1.3-0.4,2.1c0,0.8,0.1,1.5,0.4,2.1c0.2,0.6,0.6,1.2,1,1.6c0.4,0.5,0.9,0.8,1.5,1
						s1.1,0.4,1.8,0.4c0.6,0,1.2-0.1,1.8-0.4c0.5-0.2,1-0.6,1.4-1s0.7-1,1-1.6c0.2-0.6,0.4-1.3,0.4-2.1
						C110.8,21.2,110.7,20.5,110.5,19.9z"/>
					<path class="st0" d="M127.9,29.9V28c-0.5,0.6-1.2,1.2-2.1,1.6c-0.8,0.4-1.9,0.7-3.1,0.7c-0.8,0-1.5-0.1-2.2-0.3
						c-0.7-0.2-1.3-0.5-1.8-0.9s-0.9-0.9-1.2-1.5c-0.3-0.6-0.5-1.3-0.5-2.1v-0.1c0-0.9,0.2-1.6,0.5-2.2s0.8-1.2,1.3-1.6
						c0.6-0.4,1.2-0.7,2-0.9c0.8-0.2,1.6-0.3,2.6-0.3s1.8,0.1,2.4,0.2c0.7,0.1,1.3,0.3,1.9,0.5v-0.4c0-1.1-0.3-1.9-1-2.5
						s-1.6-0.9-2.9-0.9c-0.9,0-1.7,0.1-2.4,0.3c-0.7,0.2-1.4,0.4-2.1,0.7l-1-2.9c0.9-0.4,1.8-0.7,2.7-1c0.9-0.2,2-0.4,3.3-0.4
						c2.4,0,4.1,0.6,5.2,1.8s1.7,2.8,1.7,4.9v9.4h-3.3C127.9,30.1,127.9,29.9,127.9,29.9z M128,23.2c-0.5-0.2-1-0.3-1.6-0.4
						s-1.3-0.2-2-0.2c-1.1,0-2,0.2-2.7,0.7c-0.6,0.4-1,1.1-1,1.9v0.1c0,0.8,0.3,1.3,0.9,1.7c0.6,0.4,1.3,0.6,2.2,0.6
						c0.6,0,1.2-0.1,1.7-0.2c0.5-0.2,1-0.4,1.3-0.7c0.4-0.3,0.7-0.6,0.9-1c0.2-0.4,0.3-0.9,0.3-1.4V23.2z"/>
					<path class="st0" d="M139.5,29.9h-3.7V14.1h3.7v3.6c0.5-1.2,1.2-2.2,2.1-2.9c0.9-0.7,2.1-1,3.5-1v3.8h-0.2
						c-0.8,0-1.5,0.1-2.2,0.4s-1.2,0.7-1.7,1.2s-0.9,1.2-1.1,2c-0.3,0.8-0.4,1.7-0.4,2.7L139.5,29.9L139.5,29.9z"/>
					<path class="st0" d="M163,29.9h-4.2l-4.8-6.8l-2.2,2.3v4.5h-3.7V8h3.7v13.1l6.6-7h4.4l-6.3,6.4L163,29.9z"/>
				</g>
			</g>
		</g>
	</g>
	<g>
		<path class="st0" d="M23.9,15.7l3.5-0.6c-0.7-1.2-1.3-2.4-2-3.5c-0.2-0.4-0.8-0.3-0.9,0.1l-0.9,3.6C23.5,15.5,23.7,15.8,23.9,15.7
			z"/>
		<path class="st0" d="M16.4,13l6.9-2.6c0.3-0.1,0.5-0.5,0.3-0.8l-5.2-9l-2.8,11.8C15.5,12.7,16,13.1,16.4,13z"/>
		<path class="st0" d="M27.7,16.2L25,16.6c-0.4,0.1-0.6,0.6-0.3,0.9l11.5,12.6l-7.9-13.7C28.2,16.2,28,16.1,27.7,16.2z"/>
		<path class="st0" d="M22.7,19.2l-2.6,7c-0.1,0.3,0.1,0.6,0.4,0.7l14.7,4.3L23.8,19C23.5,18.7,22.9,18.8,22.7,19.2z"/>
		<path class="st0" d="M21.2,16.4l-6-2.3c-0.2-0.1-0.3,0-0.5,0.1L1.2,29.7l20-12.6C21.5,16.9,21.5,16.5,21.2,16.4z"/>
		<path class="st0" d="M21.2,16.4l-6-2.3c-0.2-0.1-0.3,0-0.5,0.1L1.2,29.7l20-12.6C21.5,16.9,21.5,16.5,21.2,16.4z"/>
		<path class="st0" d="M14.3,12.7l3-12.6L0.7,29l13.5-16.2C14.2,12.8,14.3,12.8,14.3,12.7z"/>
		<path class="st0" d="M21.1,18.8L1.9,30.6l16.8-4c0.1,0,0.1-0.1,0.2-0.2l2.7-7.2C21.7,18.9,21.4,18.6,21.1,18.8z"/>
		<path class="st0" d="M18.4,0.6L18.4,0.6l-2.8,11.8c-0.1,0.4,0.3,0.8,0.7,0.6l2.1-0.8V0.6z"/>
		<path class="st0" d="M23.3,18.8c-0.2,0-0.5,0.2-0.6,0.4l-2.6,7c-0.1,0.3,0.1,0.6,0.4,0.7l2.8,0.8C23.3,27.7,23.3,18.8,23.3,18.8z"
			/>
	</g>
	</g>

	<g>
	<path class="st2" d="M165.5,10l2.4-2c1-0.9,1.5-1.3,1.5-2s-0.5-1.1-1.1-1.1c-0.5,0-0.9,0.2-1.4,0.7c-0.1,0.1-0.3,0.3-0.6,0.3
		c-0.5,0-0.8-0.4-0.8-0.8c0-0.2,0.1-0.4,0.2-0.6c0.7-0.8,1.5-1.2,2.7-1.2c1.7,0,2.9,1,2.9,2.6l0,0c0,1.4-0.7,2.1-2.2,3.3l-1.4,1.1
		h2.9c0.4,0,0.8,0.4,0.8,0.8s-0.4,0.8-0.8,0.8H166c-0.6,0-1-0.3-1-0.9C165,10.5,165.2,10.2,165.5,10z"/>
	<path class="st2" d="M173.7,9.8c0.6,0,1,0.4,1,1l0,0c0,0.6-0.4,1-1,1s-1-0.4-1-1l0,0C172.6,10.2,173.1,9.8,173.7,9.8z"/>
	<path class="st2" d="M175.8,7.6L175.8,7.6c0-2.5,1.5-4.4,3.7-4.4s3.7,1.9,3.7,4.3l0,0c0,2.4-1.5,4.3-3.7,4.3
		C177.3,11.9,175.8,10,175.8,7.6z M181.4,7.6L181.4,7.6c0-1.5-0.7-2.7-1.8-2.7s-1.8,1.1-1.8,2.7l0,0c0,1.5,0.7,2.7,1.8,2.7
		S181.4,9.1,181.4,7.6z"/>
	</g>
	</svg>
	</div></h1>
	       
        <hr />
        <h2>Sign Up for Allspark Demo</h2>
        <p>Audience Curation | Identity Unification | Powerful Analytics | Real-time Targeting |<br class="des-add" /> Attribution & Measurement | Unified Consumer View | Real World Consumer Footprints</p>
      </div>
   </div>
  </div>
  <div class="banner-space container allspark-space"></div>
</div>
<div class="container container--fixed top-spacer allspark-subpages contact" style="padding: 100px 0px; text-align: center;">
	<div class="row" style="margin: 0;">
		<div class="container col-md-12" style=" text-align: center;">
  			<div id="message"></div>
    		 <form data-enable-shim="true" name="contactform" class="custom-form" action="<?php echo SITE_URL; ?>allspark/contact.php" method="post" id="contactform" style="text-align:center; margin: 0px 15px;" enctype="multipart/form-data">
            <div class="form-group margin-bottom col-md-12 row">
            <div class="col-md-6 row">
              <input type="text" id="name" name="name" placeholder="Full Name" class="form-control" aria-describedby="nameHelp">
            </div>
            <div class="col-md-6 row">
            <input type="email" id="email" name="email"  placeholder="Business Email" class="form-control" aria-describedby="emailHelp" >
          </div>
            </div>

        <div class="form-group margin-bottom col-md-12 row">
         
          <div class="col-md-6 row">
            <input class="form-control" type="text" id="phone" name="phone"  placeholder="Contact Number">
          </div>
          <div class="col-md-6 row">
            <input class="form-control" type="text" id="country" name="country"  placeholder="Country">
          </div>
        </div>
       
      <div class="form-group margin-bottom col-md-12 row">
            <div class="col-md-6 row ">
              <input class="form-control" type="text" id="company" name="company"  placeholder="Company Name">
          </div>
          <div class="col-md-6 row ">
              <input class="form-control" type="text" id="find" name="find"  placeholder="How did you find us">
          </div>
      </div>
       <div class="form-group margin-bottom col-md-12 ">

          <input type="checkbox" name="verify" value="" id="verify" style="display: inline-block; width: auto !important;" /> 
          <span style="color:#5c5c5c">I agree with <a href="<?php echo SITE_URL; ?>terms/" style="color:#5c5c5c; text-decoration:underline;">Terms and conditions</a></span>
                
        </div>
   
        <button type="submit" id="submit" class="submit btn btn-primary">Submit</button>

		</form>
    </div>
    </div>
 </div>
    <div class="space"></div>
    <!-- information section -->

    <!-- close information section -->
  
<?php include('../includes/_footer.php'); ?>
 <?php include('../includes/_java_scripts.php'); ?>
<!-- Load Javascript
  	================================================== -->
<!-- AJAX Form Submit -->
    <script src="<?php JS('signup/respond.src.js'); ?>"></script>
    <script src="<?php JS('signup/jquery.parallax.min.js'); ?>"></script>
    <script src="<?php JS('signup/jquery.flexslider-min.js'); ?>"></script>
    <script type="text/javascript" src="<?php  JS('signup/jquery.jigowatt.js'); ?>"></script>
   
<!-- End Document
================================================== -->

</body>
</html>
