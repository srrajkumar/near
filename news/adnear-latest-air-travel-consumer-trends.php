<?php include('../includes/_config.php');
$meta_title = 'Latest Air Traveller Trends and Mobile Engagement | Near';
$meta_desc = "Near examines the latest air traveller trends and their mobile engagement! Comparing Mumbai to their counterparts, download the full report here!";
$title ='Latest Air Traveller Trends : Travellers in Mumbai are 14% higher engaged on Mobile compared to their counterparts in India';
?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en"><![endif]-->
<html  lang="en">
<head>
	<?php include('../includes/_head.php'); ?>

	<meta property="og:image" content="http://near.co/images/news/travellers.png" />
</head>
	<body>
	<div class="preloader">
  <?php include('../includes/preloader.php'); ?>
</div>
	<?php include('../includes/_navigation.php'); ?>
		<?php include('news_banner.php'); ?>

            <!-- BEGIN: Page content -->
			<div class="view newsroom" style="margin-top: 100px;">
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
											<h2 style="text-align:left;"><?php echo $title; ?></h2>
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
		<!-- END: Page content -->
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <!-- BEGIN: Footer -->
		<?php include('../includes/_footer.php'); ?>
		<!-- END: Footer -->
		<?php include('../includes/_java_scripts.php'); ?>
  </body>
</html>
