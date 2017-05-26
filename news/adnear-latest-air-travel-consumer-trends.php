<?php include("../includes/_config.php"); include("../includes/_lib.php"); 
$meta_title = 'Latest Air Traveller Trends and Mobile Engagement | Near';
$meta_desc = "Near examines the latest air traveller trends and their mobile engagement! Comparing Mumbai to their counterparts, download the full report here!";
$title ='Latest Air Traveller Trends : Travellers in Mumbai are 14% higher engaged on Mobile compared to their counterparts in India';?>

<!DOCTYPE html>
<html class="background-100-e">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $meta_title; ?></title>
    <meta name="title" content="<?php echo $meta_title; ?>" />
    <meta name="description" content="<?php echo $meta_desc; ?>" />   
	<meta property="og:title" content="<?php echo $title; ?>" />
    <meta property="og:description" content="<?php echo $meta_desc; ?>" />
	<meta property="og:image" content="http://near.co/images/news/travellers.png" />
    <meta name="KEYWORDS" content="" />
    <meta name="AUTHOR" content="Near" />
    <meta name="RATING" content="General" />
    <meta name="ROBOTS" content="index, follow" />
    <meta name="REVISIT-AFTER" content="30 days" />
    <?php include('../includes/_head.php'); ?>
	<link rel="stylesheet" href="<?php CSS('filter.css'); ?>" />
     <link rel="stylesheet" href="<?php  CSS('social-buttons.css'); ?>">
	</head>
	<body class="state1 background-100-e">
		<!-- BEGIN: Top menu -->
			<?php include('../includes/_header.php'); ?>
		<!-- END: Top menu -->
        <div class="overlay-window gallery-overlay colors-f background-95-f" data-overlay-zoom="#work .content">
			<div class="overlay-control background-85-d">
				<a class="previos" href="#"></a>
				<a class="next" href="#"></a>
				<a class="cross" href="#"></a>
			</div>
			<div class="overlay-view"></div>
			<ul class="loader">
				<!--li class="background-100-d"></li>
				<li class="background-100-d"></li>
				<li class="background-100-d"></li-->
			</ul>
		</div>
		<div class="overlay-window map-overlay colors-f background-95-f">
			<div class="overlay-control background-90-f">
				<a class="cross" href="#"></a>
			</div>
			<div class="overlay-view">
				<div class="map-canvas" data-latitude="42.487606" data-longitude="-71.115661" data-zoom="14">
					<div class="map-marker" data-latitude="42.487606" data-longitude="-71.115661" data-text="Our awesome location"></div>
					<div class="map-marker" data-latitude="42.485100" data-longitude="-71.113256" data-text="Our sales office"></div>
				</div>
			</div>
		</div>
		<div class="gate colors-e background-solid">
			<div class="gate-bar background-highlight-e"></div>
			<ul class="loader">
				<!--li class="background-100-g"></li>
				<li class="background-90-c"></li>
				<li class="background-100-f"></li-->
			</ul>
		</div>
		<!-- BEGIN: Page content -->
	
            
            <div class="view sub-banner">
        <div class="overlay-vdo2" ></div>
				<img alt class="bg" src="<?php  IMAGE('bg-news.png'); ?>" /><img alt class="bg" src="<?php IMAGE('bg-news.png'); ?>" />
				<div class="content one-third-size colors-e background-60" style="z-index:2">
					<div class="container">
						<h2><?php echo $title; ?></h2>
						<!--<p class="title">Policy</p>-->
					</div>
				</div>
			</div>
		<section>
			<div class="view">
				<div class="content  colors-e background-90-e">
					<div class="container">
						<div class="row">
							<div class="col-md-9">
								<div class="row post">
									<div class="col-md-3 post-meta">
									<div class="post-date">
										<div class="post-day">5</div>
										<div class="post-month">May 2014</div>
										</div>
										<div class="post-author"><i class="fa fa-map-marker"></i>&nbsp; India</div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
												<img class="fluid-width" src="<?php IMAGE('news/travellers.png'); ?>" alt="" />
											</div>
											<h4 style="text-align:left;"><?php echo $title; ?></h4>
											<p>Big data company Near's latest behavioural insights shows interesting user trends across six key airports in India; Mumbai, Delhi, Chennai, Bangalore, Kolkata and Hyderabad airports.</p>
                
                <p> Data compiled from 650,000 India-based mobile users over three months showed that mobile users in Mumbai are more active on their devices compared to their counterparts. Compared to the average time spent on mobile of 1.61 hours per user across requests, Mumbai travellers were 14 per cent more engaged, followed by Kolkata travellers at eight per cent. Bangalore travellers came up least engaged at 18 per cent less than the average.</p>
                
                <p>The complete report can be downloaded at: <a target="_blank" href="<?php PDF('consumer-intelligence/insights-on-air-travellers-India.pdf'); ?>">here</a></p>
			    
                <p>Near currently profiles users in Southeast Asia, Australia and India, and the company has the largest location-based audience in Asia-Pacific. Many global brands such as Google, Audi, P&G, McDonalds, and many more are already employing Near's technology to target specific audience segments relevant to their business.</p>
				<p>The news is also covered in: <a href="http://www.digitalmarket.asia/how-mobile-can-uncover-insights-into-traveller-behaviour-in-india/" taget="_blank"> DMA</a>,<a href="http://www.businessinsider.in/Infographic-The-Latest-Air-Travel-Trends-In-India-79-AirTravellers-In-India-Are-Male/articleshow/34428697.cms" taget="_blank"> BusinessInsider </a>,<a href="http://www.hospitalitynet.org/news/4065107.html" taget="_blank"> HospitalityNet </a>, <a href="http://www.nextbigwhat.com/mobile-usage-at-indian-airports-study-297/" taget="_blank">NextBigWhat </a>, <a href="http://yourstory.com/2014/04/adnear-mobile-ad/" taget="_blank"> Yourstory </a></p>
											<div class="post-tags styled-list">
												<i class="fa fa-tags"></i>
												<ul>
													<li><a class="page-transition" href="<?php echo SITE_URL; ?>news/tags/research.php">Research</a></li>
													<li><a class="page-transition" href="<?php echo SITE_URL; ?>news/tags/DMA.php">DMA</a></li>
													<li><a class="page-transition" href="<?php echo SITE_URL; ?>news/tags/businessinsider.php">BusinessInsider</a></li>
													<li><a class="page-transition" href="<?php echo SITE_URL; ?>news/tags/hospitalitynet.php">HospitalityNet</a></li>
													<li><a class="page-transition" href="<?php echo SITE_URL; ?>news/tags/nextbigwhat.php">NextBigWhat</a></li>
													<li><a class="page-transition" href="<?php echo SITE_URL; ?>news/tags/yourstory.php">Yourstory</a></li>
												</ul>
											</div>
											
											<div class="container news">
             <div class="social-share">
           		<div class="social-sharing is-clean" data-permalink="<?php my_url(); ?>">

    <!-- https://developers.facebook.com/docs/plugins/share-button/ -->
    <a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php my_url(); ?>" class="share-facebook">
      <span class="fb-icon icon1"><i class="fa fa-facebook" style="font-style:normal; padding-left:7px;"></i><i class="share">Share</i></span>
      <span class="share-count">0</span>
    </a>

    <!-- https://dev.twitter.com/docs/intents -->
    <a target="_blank" href="http://twitter.com/share?url=<?php my_url(); ?>&amp;via=Near&amp;text=<?php echo $title; ?>&amp;count=true" class="share-twitter"> <span class="twitter-icon icon1"><i class="fa fa-twitter" style="font-style:normal; padding-left:7px;"></i><i class="share">Tweet</i></span>
      <span class="share-count">0</span>
    </a>

</div>
            
            </div>
             
           
            </div>
										</div>
									</div>
								</div>
							</div>
						<?php include('../includes/_news-filter.php'); ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END: Page content -->
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <!-- BEGIN: Footer -->
		<?php include('../includes/_footer.php'); ?>
		<!-- END: Footer -->
	<?php include('../includes/_java_scripts.php'); ?>
	<script src="<?php JS('social-buttons.js'); ?>" type="text/javascript"></script>  

  </body>
</html>
